!function(){var i,c=tinymce.VK,r=tinymce.dom.TreeWalker;tinymce.create("tinymce.plugins.wpView",{init:function(e){var o=this;"undefined"!=typeof wp&&wp.mce&&(e.onPreInit.add(function(e){e.schema.addValidElements("div[*],span[*]")}),e.onBeforeSetContent.add(function(e,n){n.content&&(n.content=wp.mce.view.toViews(n.content))}),e.onSetContent.add(function(e){wp.mce.view.render(e.getDoc())}),e.onInit.add(function(i){i.selection.onBeforeSetContent.add(function(e){var n,t=o.getParentView(e.getNode());t&&(!t.nextSibling||o.isView(t.nextSibling)?(n=i.getDoc().createTextNode(""),i.dom.insertAfter(n,t)):n=new r(t.nextSibling,t.nextSibling).next(),e.select(n),e.collapse(!0))}),i.selection.onSetContent.add(function(e,n){!n.context||(e=e.getNode()).innerHTML&&(e.innerHTML=wp.mce.view.toViews(e.innerHTML),wp.mce.view.render(e))})}),e.onPostProcess.add(function(e,n){(n.get||n.save)&&n.content&&(n.content=wp.mce.view.toText(n.content))}),e.onNodeChange.addToTop(function(e,n,t){t=o.getParentView(t);if(t)return o.select(t),!1;o.deselect()}),e.onKeyDown.addToTop(function(e,n){var t=n.keyCode;i&&(o.getParentView(e.selection.getNode())===i?(t!==c.DELETE&&t!==c.BACKSPACE||(e=wp.mce.view.instance(i))&&(e.remove(),o.deselect()),n.metaKey||n.ctrlKey||112<=t&&t<=123||n.preventDefault()):o.deselect())}))},getParentView:function(e){for(;e;){if(this.isView(e))return e;e=e.parentNode}},isView:function(e){return/(?:^|\s)wp-view-wrap(?:\s|$)/.test(e.className)},select:function(e){e!==i&&(this.deselect(),i=e,wp.mce.view.select(i))},deselect:function(){i&&wp.mce.view.deselect(i),i=null},getInfo:function(){return{longname:"WordPress Views",author:"WordPress",authorurl:"http://wordpress.org",infourl:"http://wordpress.org",version:"1.0"}}}),tinymce.PluginManager.add("wpview",tinymce.plugins.wpView)}();