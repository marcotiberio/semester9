function T(r,a){var t=window.Element.prototype,n=t.matches||t.mozMatchesSelector||t.msMatchesSelector||t.oMatchesSelector||t.webkitMatchesSelector;if(!r||r.nodeType!==1)return!1;var o=r.parentNode;if(n)return n.call(r,a);for(var s=o.querySelectorAll(a),u=s.length,i=0;i<u;i++)if(s[i]===r)return!0;return!1}var b=T,f=function(r,a,t){for(t=t||document,r={parentNode:r};(r=r.parentNode)&&r!==t;)if(b(r,a))return r},w=["input","textarea","button","select","form"].map(function(r){return"".concat(r,"[disabled]")}).join(","),v={focus:"focusin",blur:"focusout",mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},E=function(){for(var r=arguments.length,a=new Array(r),t=0;t<r;t++)a[t]=arguments[t];var n=a.length===3;n||a.unshift(null);var o=a[0],s=a[1],u=a[2],i=function(e){if(s===""){e.delegateTarget=e.target,n&&(e.originalEventType=o),u(e);return}var p=f(e.target,w),l=f(e.target,s),g=!e.currentTarget.contains(p)&&e.currentTarget.contains(l)&&e.currentTarget!==e.target;if(g)if(e.delegateTarget=l,n&&(e.originalEventType=o),n&&typeof v[o]<"u"&&o!=="focus"&&o!=="blur"){var h=e.delegateTarget,d=e.relatedTarget;(!d||!h.contains(d))&&u(e)}else u(e)};if(n){var c;return[(c=v[o])!==null&&c!==void 0?c:o,i]}return i};const M=E;export{M as d};