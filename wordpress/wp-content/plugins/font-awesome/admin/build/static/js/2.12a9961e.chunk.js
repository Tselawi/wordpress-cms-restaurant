(this["webpackJsonpfont-awesome-admin"]=this["webpackJsonpfont-awesome-admin"]||[]).push([[2],{180:function(i,t,n){"use strict";n.r(t),n.d(t,"fa_icon",(function(){return r}));var e=n(12),o=n(21),s=n(24),c=n(42),a=n(357),r=function(){function i(t){Object(o.a)(this,i),Object(c.j)(this,t),this.pro=!1,this.loading=!1}return Object(s.a)(i,[{key:"componentWillLoad",value:function(){var i=this;if(this.iconUpload)this.iconDefinition={prefix:"fak",iconName:this.iconUpload.name,icon:[parseInt("".concat(this.iconUpload.width)),parseInt("".concat(this.iconUpload.height)),[],this.iconUpload.unicode.toString(16),this.iconUpload.path]};else if(this.icon)this.iconDefinition=this.icon;else if(this.svgApi)if(this.stylePrefix&&this.name){var t=this.svgApi.findIconDefinition,n=t&&t({prefix:this.stylePrefix,iconName:this.name});if(n)this.iconDefinition=n;else if(this.pro)if(this.svgFetchBaseUrl)if(this.kitToken){this.loading=!0;var e="".concat(this.svgFetchBaseUrl,"/").concat(a.c[this.stylePrefix],"/").concat(this.name,".svg?token=").concat(this.kitToken),o=a.k.get(this,"svgApi.library");"function"===typeof this.getUrlText?this.getUrlText(e).then((function(t){var n={iconName:i.name,prefix:i.stylePrefix,icon:Object(a.l)(t)};o&&o.add(n),i.iconDefinition=Object.assign({},n)})).catch((function(t){console.error("".concat(a.a,": fa-icon: failed when using 'getUrlText' to fetch icon"),t,i)})).finally((function(){i.loading=!1})):console.error("".concat(a.a,": fa-icon: 'getUrlText' prop is absent but is necessary for fetching icon"),this)}else console.error("".concat(a.a,": fa-icon: 'kitToken' prop is absent but is necessary for accessing icon"),this);else console.error("".concat(a.a,": fa-icon: 'svgFetchBaseUrl' prop is absent but is necessary for fetching icon"),this);else console.error("".concat(a.a,": fa-icon: 'pro' prop is false but no free icon is avaialble"),this)}else console.error("".concat(a.a,": fa-icon: the 'stylePrefix' and 'name' props are needed to render this icon but not provided."),this);else console.error("".concat(a.a,": fa-icon: svgApi prop is needed but is missing"),this)}},{key:"buildSvg",value:function(i,t){if(i){var n=a.k.get(i,"icon",[]),o=Object(e.a)(n,5),s=o[0],r=o[1],h=o[4],l=["svg-inline--fa"];this.class&&l.push(this.class),t&&l.push(t),this.size&&l.push("fa-".concat(this.size));var f=l.join(" ");return Array.isArray(h)?Object(c.h)("svg",{class:f,xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 ".concat(s," ").concat(r)},Object(c.h)("path",{fill:"currentColor",class:"fa-primary",d:h[0]}),Object(c.h)("path",{fill:"currentColor",class:"fa-secondary",d:h[1]})):Object(c.h)("svg",{class:f,xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 ".concat(s," ").concat(r)},Object(c.h)("path",{fill:"currentColor",d:h}))}}},{key:"render",value:function(){return this.iconDefinition?this.buildSvg(this.iconDefinition):Object(c.h)(c.f,null)}}]),i}();r.style=""}}]);
//# sourceMappingURL=2.12a9961e.chunk.js.map