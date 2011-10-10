
var Search = {
	_SUGGEST_CLASSES: {
		// TODO update to correct search types
		alias:  	"search",
		blog:    	"blog",
		//item:    	"item",
		profile: 	"profile",
		search:  	"search",
		url:     	"search",
		friend:	 	"search",
		articlekeyword:	 "search",
		item:	 	"search",
		character:	"search",
		guild:	 	"search",
		arenateam:	"search"
	},

	init: function (suggestUrl, id) {

		id = id || "search-field";
		$.widget("custom.catcomplete", $.ui.autocomplete, {
			_renderItem: function( ul, item ) {
				return $( "<li></li>" )
					.addClass(Search._SUGGEST_CLASSES[item.type])
			        .data( "item.autocomplete", item )
			        .append( "<a class='type-"+item.type+"'>" + item.label + "</a>" )
			        .appendTo( ul );
			}
		});

		$('#' + id).catcomplete({
			delay: 200,
			minLength: 3,
			source: function(req, add) {
				$.ajax({
					url: suggestUrl+"?locale="+Core.formatLocale(2,'_')+"&community="+Core.project,
					data: req,
					cache: true,
					// use xhr if same host, otherwise jsonp
					dataType: suggestUrl.charAt(0) == "/" ? "json" : "jsonp",
					success: function (data) {
						var suggestions = [],
							searchChunks = new RegExp('('+req.term.trim().split(' ').join('|')+')','gi')
						
						for (x in friendData){
							if (friendData.hasOwnProperty(x))
								if (friendData[x].term.toLowerCase().indexOf(req.term.toLowerCase().trim()) > -1)
									data.results.push(friendData[x]);
						}

						$.each(data.results, function(i, val) {
							var result = {}
							switch (val.type) {
								/*case "alias":
									val.label = val.alias;
									val.value = val.alias;
									break;*/
								case "search":
									result.label = Msg.cms.searchFor +" " + val.term.replace(searchChunks,'<b>$1</b>');
									result.value = val.term;
									break;
								case "url":
									var url = val.url.replace(/https?:\/\//g,'')
									result.label = val.title.replace(searchChunks,'<b>$1</b>') + '<span> - ' + url.substring(url.indexOf('/'), url.length) + '</span>';
									result.value = val.url;
									result.url = val.url;
									break;
								case "friend":
									var url = val.url.replace(/https?:\/\//g,'')
									result.label = val.title.replace(searchChunks,'<b>$1</b>') + '<span> - ' + url.substring(url.indexOf('/'), url.length) + '</span>';
									result.value = val.url;
									result.url = val.url;
									break;
								case "articlekeyword":
									result.label = Msg.cms.searchTags + " " + val.term.replace(searchChunks,'<b>$1</b>');
									result.value = val.term;
									result.keyword = val.term;
									result.filter = 'article';
								case "item":
									result.label = '<span class="rarity color-q'+ val.rarity +'">'+ val.term + '</span> - <span> '+ Msg.cms.ilvl +'  ' + val.level + '</span>';
									result.value = val.term;
									result.url = Core.baseUrl + "/item/" + val.objectId;
									break;
								case "character":
									result.label = val.term + '<span>@' + val.realmName /*+ ' - ' + val.level + ' ' + val.raceId + ' ' + val.classId */+ '</span>';
									result.value = val.term;
									result.url = Core.baseUrl + "/character/" + val.realmName.replace(/\s/g,'-').toLowerCase() + "/" + val.term + "/";
									break;
								case "guild":
									result.label = "&lt;" + val.term + '&gt; - <span>' + val.realmName /*+ ' - ' + val.level + ' ' + val.raceId + ' ' + val.classId */+ '</span>';
									result.value = val.term;
									result.url = Core.baseUrl + "/guild/" + val.realmName.replace(/\s/g,'-').toLowerCase() + "/" + val.term + "/";
									break;
								case "arenateam":
									result.label = val.term + '<span>@' + val.realmName /*+ ' - ' + val.level + ' ' + val.raceId + ' ' + val.classId */+ '</span>';
									result.value = val.term;
									result.url = Core.baseUrl + "/arenateam/" + val.realmName.replace(/\s/g,'-').toLowerCase() + "/" + val.term + "/";
									break;
									
							}

							result.type = val.type;
							if(result.label)suggestions.push(result);
						});
						add(suggestions);
					},
					error: function(e,r){ }

				});
			},
			select: function(event, ui) {
				if (ui.item) {
					if (ui.item.url) {
						window.location = ui.item.url;
					} else {
						if (ui.item.filter) $("#search-form").append('<input type="hidden" name="f" value="'+ui.item.filter+'"/>');
						if (ui.item.keyword) $("#search-form").append('<input type="hidden" name="k" value="'+result.keyword+'"/>');
						$("#search-form").submit();

					}
				}
			}
		});
	}
}