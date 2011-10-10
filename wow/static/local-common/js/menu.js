/**
 * Dynamically create and position certain menus and sub menus (JSON objects) depending on specific conditions.
 *
 * @copyright   2010, Blizzard Entertainment, Inc
 * @class       Menu
 * @requires    Page
 * @example
 *
 *      Menu.data = {
 *          children: [
 *              {
 *                  label: "Foo",
 *                  url:   "foo/bar"
 *              }
 *          ]
 *      }
 *
 */

var Menu = {

	/**
	 * Base menu object data.
	 */
	data: {},

	/**
	 * Menu object data indexed by path.
	 */
	dataIndex: {},

	/**
	 * The main container element.
	 */
	container: null,

	/**
	 * The element that opened the drop down menu.
	 */
	node: null,

	/**
	 * Element ID to prepend to cached menus.
	 */
	idName: 'menu-tier',

	/**
	 * Wrapper class name for all sub menus.
	 */
	className: 'flyout-menu',

	/**
	 * Timer to kill the menu.
	 */
	timer: null,

	/**
	 * Timer to open/close the menu after a duration.
	 */
	openTimer: null,

	/**
	 * Misc configuration.
	 */
	config: {
		duration: 750,
		dataUrl: {},
		colWidth: 200,
		colMax: 15
	},

	/**
	 * Initialize the class a store the container.
	 *
	 * @param url
	 * @constructor
	 */
	initialize: function(url) {
		Menu.container = $('<div/>').attr('id', 'menu-container').appendTo('body');
		Menu.container
			.unbind()
			.mouseleave(function() {
				Menu.timer = window.setTimeout(function() {
					Menu.hide();
				}, Menu.config.duration);
			})
			.mouseenter(function() {
				window.clearTimeout(Menu.timer);
			});

		// Get the data
		if (url)
			Menu.load('base', url);

		// Bind the handlers
		$('.ui-breadcrumb li a').each(function(key, crumb) {
			var anchor = $(crumb),
				url = anchor.attr('href').replace(Core.baseUrl, '');

			anchor.mouseover(function() {
				Menu.show(this, url);
			});
		});
	},

	/**
	 * Hide / reset the menu system.
	 */
	hide: function() {
		window.clearTimeout(Menu.timer);
		window.clearTimeout(Menu.openTimer);

		Menu.container.find('div').hide();

		if (Menu.node) {
			Menu.node.removeClass('opened');
			Menu.node = null;
		}
	},

	/**
	 * Load a dataset from a location.
	 *
	 * @param set
	 * @param url
	 */
	load: function(set, url) {
		if (Menu.data[set])
			return;

		$.ajax({
			url: Core.baseUrl + url,
			success: function(data) {
				Menu.data[set] = data;
				Menu.dataIndex[set] = {};
				Menu._populate(data, set);
			}
		});

		Menu.config.dataUrl[set] = url;
	},

	/**
	 * An onclick alternative to show().
	 *
	 * @param node
	 * @param path
	 * @param options
	 */
	open: function(node, path, options) {
		Menu.node = $(node);

		if (!options)
			options = { set: 'base' };

		var data = Menu.dataIndex[options.set][path] || null;

		if (data && data.children) {
			var targetMenu = $('#'+ Menu.idName + data.id);

			if (targetMenu.is(':visible'))
				Menu.hide();
			else
				Menu._display(path, options);
		}
	},

	/**
	 * Show a specific menu at a specific location.
	 * Used in conjunction with onmouseover.
	 *
	 * @param node
	 * @param path
	 * @param options
	 */
	show: function(node, path, options) {
		Menu.hide();
		Menu.node = $(node);

		Menu.openTimer = window.setTimeout(function() {
			Menu._display(path, options);
		}, 200);

		Menu.node
			.unbind('mouseleave')
			.mouseleave(function() {
				window.clearTimeout(Menu.openTimer);

				Menu.timer = window.setTimeout(function() {
					Menu.hide();
				}, 1000);
			});
	},

	/**
	 * Create the div/ul elements and append it to the parent.
	 * Cycle through the links and create the li/a elements, and build children if available.
	 *
	 * @param parent - Parent node to add to
	 * @param menu - Object containing children
	 * @param cache
	 */
	_build: function(parent, menu, cache) {
		var div = $('<div>').addClass(Menu.className),
			uls = [];

		if (cache)
			div.attr('id', Menu.idName + cache);

		$.each(menu.children, function(key, data) {
			var tag = (!data.url) ? 'span' : 'a',
				li = $('<li>'),
				item = $('<'+ tag +'>', Menu._prepare(data)).appendTo(li);

			if (data.description)
				item.append('<span class="desc">'+ data.description +'</span>');

			if (data.parentClass)
				li.addClass(data.parentClass);

			// Bind hovers and children
			if (data.children) {
				item.addClass('children');

				li.hover(
					function() {
						var self = $(this);
						self.find('a:first').addClass('opened');

						if (self.find('.'+ Menu.className).length === 0)
							Menu._build(this, data, false);

						Menu._position(self.children('.'+ Menu.className));
					},
					function() {
						$(this)
							.find('a:first').removeClass('opened').end()
							.children('.'+ Menu.className).hide();
					}
				);
			}

			// Determine which list
			var index = Math.ceil((key + 1) / Menu.config.colMax) - 1;

			if (menu.children.length <= (Menu.config.colMax + 3))
				index = 0;

			if (!uls[index])
				uls[index] = $('<ul/>');

			li.appendTo(uls[index]);
		});

		// Append
		for (var i = 0; i <= (uls.length - 1); ++i) {
			$(uls[i]).appendTo(div);
		}

		if (uls.length > 1)
			div.css('width', (uls.length * Menu.config.colWidth));

		div.appendTo(parent);
	},

	/**
	 * Position the parent menu at the location.
	 *
	 * @param path
	 * @param options
	 */
	_display: function(path, options) {
		if (!options)
			options = { set: 'base' };

		if (!Menu.dataIndex[options.set][path])
			return;

		var data = Menu.dataIndex[options.set][path],
			center = (options.center) || (options === true),
			id = data.id || '-'+ options.set;

		if (data && data.children) {
			var targetMenu = $('#'+ Menu.idName + id);

			if (targetMenu.length > 0)
				targetMenu.fadeIn('fast');
			else
				Menu._build(Menu.container, data, id);

			Menu.node.addClass('opened');

			// Position menu accordingly
			var nodeOffset = Menu.node.parent().offset(), 
				nodeWidth = Menu.node.parent().width(),
				x = nodeOffset.left,
				y = nodeOffset.top + Menu.node.outerHeight(),
				opts = {
					top: y +'px',
					position: 'absolute',
					visibility: 'visible',
					zIndex: '75'
				};

			if (center) {
				var width = Math.round(nodeWidth / 2) - Math.round(Menu.config.colWidth / 2);
				opts.left = (x + width) +'px';
			} else {
				opts.left = x +'px';
			}

			Menu.container.css(opts).show();
		}
	},

	/**
	 * Show the element, and reposition it if it goes off the page.
	 *
	 * @param element
	 */
	_position: function(element) {
		element.show();

		if (element.find('ul').length <= 1) {
			var offset = element.offset(),
				width = element.outerWidth(),
				x = offset.left + width;

			if (x >= Page.dimensions.width)
				element.css('left', -width);
		}
	},

	/**
	 * Populate the class with data returned from the server.
	 *
	 * @param node
	 * @param set
	 */
	_populate: function(node, set) {
		if (!Menu.dataIndex[set][node.url]) {
			node.id = node.url.replace(/[^\-a-zA-Z0-9\/]/ig, '');
			node.id = node.id.replace(/\//ig, '-');

			if (node.id.substr(-1) === '-')
				node.id = node.id.substr(0, (node.id.length - 1));

			Menu.dataIndex[set][node.url] = node;
		}

		if (node.children) {
			for (var i = 0, child; child = node.children[i]; i++) {
				Menu._populate(child, set);
			}
		}
	},

	/**
	 * Prepare the element params based on a whitelist.
	 *
	 * @param obj
	 */
	_prepare: function(obj) {
		var mapping = { html: obj.label, rel: 'np' },
			params = {};

		if (obj.url != null)
			mapping.href = Core.baseUrl + obj.url;

		$.each(mapping, function(key, value) {
			if (value)
				params[key] = value;
		});

		return params;
	}

};
