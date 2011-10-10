
$(function() {
	Wow.bindItemTooltips();
	Wow.bindCharacterTooltips();
	Fansite.initialize();
});

var Wow = {

	/**
	 * Display or hide the video.
	 */
	toggleInterceptVideo: function() {
		$("#video, #blackout, #play-trailer").toggle();
		return false;
	},

	/**
	 * Bind item tooltips to links.
	 * Gathers the item ID from the href, and the optional params from the data-item attribute.
	 */
	bindItemTooltips: function() {
		var doc = $(document);
		var callback = function() {
			if (this.href == 'javascript:;' || this.href.indexOf('#') == 0 || this.rel == 'np')
				return;

			var self = $(this),
				data = self.data('item'),
				href = self.attr('href').replace(Core.baseUrl +'/item/', ""),
				id = parseInt(href),
				query = (data) ? '?'+ data : "";

			if (id && id > 0)
				Tooltip.show(this, '/item/'+ id +'/tooltip'+ query, true);
		};

		doc.undelegate('a[href*="/item/"]', 'mouseover.tooltip', callback);
		doc.delegate('a[href*="/item/"]', 'mouseover.tooltip', callback);
	},

	/**
	 * Bind character tooltips to links.
	 * Add rel="np" to disable character tooltips on links.
	 */
	bindCharacterTooltips: function() {
		var doc = $(document);
		var callback = function() {
			if (this.href == 'javascript:;' || this.href.indexOf('#') == 0 || this.rel == 'np' || this.href.indexOf('/vault/') != -1)
				return;

			var self = $(this),
				href = self.attr('href').replace(Core.baseUrl +'/character/', "").split('/');

			if (location.href.toLowerCase().indexOf('/'+ href[1] +'/') != -1 && this.rel != 'allow')
				return;

			Tooltip.show(this, '/character/'+ href[0] +'/'+ href[1] +'/tooltip', true);
		};

		doc.undelegate('a[href*="/character/"]', 'mouseover.tooltip', callback);
		doc.delegate('a[href*="/character/"]', 'mouseover.tooltip', callback);
	},

	/**
	 * Update the events within the sidebar.
	 *
	 * @param id
	 * @param status
	 */
	updateEvent: function(id, status) {
		$('#event-'+ id +' .actions').fadeOut('fast');

		$.ajax({
			url: $('.profile-link').attr('href') +'event/'+ status,
			data: { eventId: id },
			dataType: "json",
			success: function(data) {
				$('#event-'+ id).fadeOut('fast', function() {
					$(this).remove();
				});
			}
		});

		return false;
	},

	/**
	 * Load the browse.json data and display the dropdown menu.
	 *
	 * @param node
	 * @param url
	 */
	browseArmory: function(node, url) {
		if ($('#menu-tier-browse').is(':visible'))
			return;

		Menu.load('browse', url);
		Menu.show(node, '/', { set: 'browse' });
	},

	/**
	 * Creates the html nodes for basic tooltips.
	 *
	 * @param title
	 * @param description
	 * @param icon
	 */
	createSimpleTooltip: function(title, description, icon) {
		var $tooltip = $('<ul/>');

		if (icon)
			$('<li/>').append(Wow.Icon.framedIcon(icon, 56)).appendTo($tooltip);

		if (title)
			$('<li/>').append($('<h3/>').text(title)).appendTo($tooltip);

		if (description)
			$('<li/>').addClass('color-tooltip-yellow').html(description).appendTo($tooltip);

		return $tooltip;
	},

	/**
	 * Add new BML commands to the editor.
	 */
	addBmlCommands: function() {
		BML.addCommands([
			{
				type: 'item',
				tag: 'item',
				filter: true,
				selfClose: true,
				prompt: Msg.bml.itemPrompt,
				pattern: [
					'\\[item="([0-9]{1,5})"\\s*/\\]'
				],
				result: [
					'<a href="'+ Core.baseUrl +'/item/$1">'+ Core.host + Core.baseUrl +'/item/$1</a>'
				]
			}
		]);
	}

};

Wow.Icon = {

	/**
	 * CDN for images.
	 */
	cdn: 'http://us.battle.net/wow-assets/static/images',

	/**
	 * Generate icon path.
	 *
	 * @param name
	 * @param size
	 */
	getUrl: function(name, size) {
		return Wow.Icon.cdn +'/icons/'+ size +'/'+ name +'.jpg';
	},

	/**
	 * Create frame icon markup.
	 *
	 * @param name
	 * @param size
	 */
	framedIcon: function(name, size) {
		var iconSize = 56;

		if (size <= 18)
			iconSize = 18;
		else if (size <= 36)
			iconSize = 36;

		var $icon = $('<span/>').addClass('icon-frame frame-' + size);

		if (size == 18 || size == 36 || size == 56) {
			$icon.css('background-image', 'url(' + Wow.Icon.getUrl(name, iconSize) + ')');
		} else {
			$icon.append($('<img/>').attr({
				width: size,
				height: size,
				src: Wow.Icon.getUrl(name, iconSize)
			}));
		}

		return $icon;
	}

}

/**
 * 3rd-party fansite integration.
 */
var Fansite = {

	/**
	 * DOM object for menu.
	 */
	object: null,

	/**
	 * Current hovered node.
	 */
	node: null,

	/**
	 * Closing timer.
	 */
	timer: null,

	/**
	 * Map of sites and available URLs.
	 */
	sites: {
		wowhead: {
			name: 'Wowhead',
			site: 'http://www.wowhead.com/',
			locales: ['de', 'es', 'fr', 'ru'],
			urls: {
				achievement: ['achievements', 'achievement={0}'],
				character: ['profiles', function(params) {
					return 'profile='+ params[1] + '.' + params[3] + '.' + params[2].toLowerCase();
				}],
				faction: ['factions', 'faction={0}'],
				'class': ['classes', 'class={0}'],
				object: ['objects', 'object={0}'],
				talentcalc: ['talent', function(params) {
					return 'talent#' + params[1].replace('-', '') + '-' + params[2];
				}],
				skill: ['skills', 'skill={0}'],
				race: ['races', 'race={0}'],
				quest: ['quests', 'quest={0}'],
				spell: ['spells', 'spell={0}'],
				event: ['events', 'event={0}'],
				title: ['titles', 'title={0}'],
				zone: ['zones', 'zone={0}'],
				item: ['items', 'item={0}'],
				npc: ['npcs', 'npc={0}'],
				pet: ['pets', 'pet={0}']
			}
		},
		wowpedia: {
			name: 'Wowpedia',
			site: 'http://www.wowpedia.org/',
			locales: [],
			urls: {
				faction: ['Factions', '{1}'],
				'class': ['Classes', '{1}'],
				skill: ['Profession', '{1}'],
				race: ['Races', '{1}'],
				zone: ['Zones', '{1}'],
				pet: ['Pets', '{1}']
			},
			buildUrl: function(params) {
				return params[2].replace(/\s+/g, '_');
			}
		}
	},

	/**
	 * Map of content types and available sites for that type.
	 */
	map: {
		achievement: ['wowhead'],
		character: ['wowhead'],
		faction: ['wowhead', 'wowpedia'],
		'class': ['wowhead', 'wowpedia'],
		object: ['wowhead'],
		talentcalc: ['wowhead'],
		skill: ['wowhead', 'wowpedia'],
		quest: ['wowhead'],
		spell: ['wowhead'],
		event: ['wowhead'],
		title: ['wowhead'],
		arena: [],
		guild: [],
		zone: ['wowhead', 'wowpedia'],
		item: ['wowhead', 'wowpedia'],
		race: ['wowhead', 'wowpedia'],
		npc: ['wowhead', 'wowpedia'],
		pet: ['wowhead', 'wowpedia'],
		pvp: []
	},

	/**
	 * Create the menu HTML and delegate link events.
	 *
	 * @constructor
	 */
	initialize: function() {
		Fansite.object = $('<div/>')
			.attr('id', 'fansite-menu')
			.addClass('ui-fansite')
			.appendTo('body')
			.mouseleave(Fansite.hide)
			.mouseenter(function() {
				window.clearTimeout(Fansite.timer);
				Fansite.timer = null;
			});

		var doc = $(document);
		var callback = function() {
			var node = $(this),
				params = Fansite.read(node.data('fansite'));

			Fansite.find(node, params);
			return false;
		};

		doc.undelegate('a[data-fansite]', 'mouseover.fansite', callback);
		doc.delegate('a[data-fansite]', 'mouseover.fansite', callback);
	},

	/**
	 * Split params the awesome way!
	 *
	 * @param data
	 * @return array
	 */
	read: function(data) {
		return data.split('|');
	},

	/**
	 * Generate links from params.
	 *
	 * @param params
	 * @return array
	 */
	createLinks: function(params) {
		var type = params[0],
			map = Fansite.map[type],
			links = [];

		if (map.length > 0) {
			var site, url, urls;

			for (var i = 0, len = map.length; i < len; ++i) {
				site = Fansite.sites[map[i]];
				url = Fansite.createUrl(site),
				urls = site.urls[type];

				if (params.length <= 1) {
					url += urls[0];
				} else {
					if (typeof site.buildUrl == 'function') {
						url += site.buildUrl(params);
					} else {
						var urlPattern = urls[1];
						
						if (typeof urlPattern == 'function') {
							url += urlPattern(params);
						} else {
							for (var j = 1; j < params.length; ++j) {
								urlPattern = urlPattern.replace('{' + (j - 1) + '}', params[j]);
							}
							url += urlPattern;
						}
					}
				}

				links.push('<a href="'+ url +'" target="_blank">'+ site.name +'</a>');
			}
		}

		return links;
	},

	/**
	 * Create the URL based on locale.
	 *
	 * @param site
	 * @return string
	 */
	createUrl: function(site) {
		var url = site.site,
			lang = Core.getLanguage();

		if ($.inArray(lang, site.locales) >= 0)
			url = url.replace('www', lang);

		return url;
	},

	/**
	 * Open up the menu and show the available sites for that type.
	 *
	 * @param node
	 * @param params
	 */
	find: function(node, params) {
		window.clearTimeout(Fansite.timer);

		// Set node
		if (Fansite.node)
			Fansite.node.parent().removeClass('fansite-hover');

		node.parent().addClass('fansite-hover');
		node.mouseleave(function() {
			window.clearTimeout(Fansite.timer);
			Fansite.timer = window.setTimeout(Fansite.hide, 750);
		});

		Fansite.node = node;

		var list = $('<ul/>');
		var links = Fansite.createLinks(params);

		if (links.length == 0) {
			$('<li/>')
				.addClass('first-child')
				.html(Msg.ui.fansiteNone)
				.appendTo(list);

		} else {
			var title = Msg.ui.fansiteFind;

			if (Msg.fansite[params[0]])
				title = Msg.ui.fansiteFindType.replace('{0}', Msg.fansite[params[0]]);

			$('<li/>')
				.addClass('first-child')
				.html(title)
				.appendTo(list);

			for (var i = 0, length = links.length; i < length; ++i) {
				$('<li/>').append(links[i]).appendTo(list);
			}

			// Linkify the button itself if there's only 1 fansite
			if (links.length == 1) {
				node.attr('href', $(links[0]).attr('href'));
				node.attr('target', '_blank');
			}
		}

		Fansite.object.html(list);
		Fansite.position(node);
	},

	/**
	 * Hide the menu.
	 */
	hide: function() {
		Fansite.object.fadeOut('fast');

		if (Fansite.node) {
			Fansite.node.parent().removeClass('fansite-hover');
			Fansite.node = null;
		}
	},

	/**
	 * Position the menu at the middle right.
	 *
	 * @param node
	 */
	position: function(node) {
		var offset = node.offset(),
			nodeWidth = node.outerWidth(),
			nodeHeight = node.outerHeight(),
			winWidth = ($(window).width() / 3),
			width = Fansite.object.outerWidth(),
			height = Fansite.object.outerHeight(),
			y = (offset.top + (nodeHeight / 2)) - (height / 2),
			x;

		if (offset.left > (winWidth * 2))
			x = (offset.left - width) - 10;
		else
			x = offset.left + nodeWidth;

		Fansite.object.show().css({
			top: y,
			left: x + 5
		});
	},

	/**
	 * Generate links for inline display.
	 *
	 * @param target
	 * @param data
	 */
	generate: function(target, data) {
		var links = Fansite.createLinks(Fansite.read(data));

		$(target).html(links.join(' ')).addClass('fansite-group');
	}

};