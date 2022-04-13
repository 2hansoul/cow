var ke=(e,t)=>()=>(t||e((t={exports:{}}).exports,t),t.exports);var Ne=ke((Et,xe)=>{var Ee="Expected a function",Ae=0/0,$e="[object Symbol]",Ke=/^\s+|\s+$/g,Je=/^[-+]0x[0-9a-f]+$/i,Qe=/^0b[01]+$/i,Ze=/^0o[0-7]+$/i,et=parseInt,tt=typeof global=="object"&&global&&global.Object===Object&&global,nt=typeof self=="object"&&self&&self.Object===Object&&self,rt=tt||nt||Function("return this")(),it=Object.prototype,at=it.toString,ot=Math.max,st=Math.min,ue=function(){return rt.Date.now()};function lt(e,t,n){var r,i,a,l,s,d,m=0,b=!1,v=!1,w=!0;if(typeof e!="function")throw new TypeError(Ee);t=Le(t)||0,J(n)&&(b=!!n.leading,v="maxWait"in n,a=v?ot(Le(n.maxWait)||0,t):a,w="trailing"in n?!!n.trailing:w);function h(g){var S=r,D=i;return r=i=void 0,m=g,l=e.apply(D,S),l}function E(g){return m=g,s=setTimeout(x,t),b?h(g):l}function A(g){var S=g-d,D=g-m,p=t-S;return v?st(p,a-D):p}function O(g){var S=g-d,D=g-m;return d===void 0||S>=t||S<0||v&&D>=a}function x(){var g=ue();if(O(g))return I(g);s=setTimeout(x,A(g))}function I(g){return s=void 0,w&&r?h(g):(r=i=void 0,l)}function U(){s!==void 0&&clearTimeout(s),m=0,r=d=i=s=void 0}function q(){return s===void 0?l:I(ue())}function k(){var g=ue(),S=O(g);if(r=arguments,i=this,d=g,S){if(s===void 0)return E(d);if(v)return s=setTimeout(x,t),h(d)}return s===void 0&&(s=setTimeout(x,t)),l}return k.cancel=U,k.flush=q,k}function ut(e,t,n){var r=!0,i=!0;if(typeof e!="function")throw new TypeError(Ee);return J(n)&&(r="leading"in n?!!n.leading:r,i="trailing"in n?!!n.trailing:i),lt(e,t,{leading:r,maxWait:t,trailing:i})}function J(e){var t=typeof e;return!!e&&(t=="object"||t=="function")}function ct(e){return!!e&&typeof e=="object"}function dt(e){return typeof e=="symbol"||ct(e)&&at.call(e)==$e}function Le(e){if(typeof e=="number")return e;if(dt(e))return Ae;if(J(e)){var t=typeof e.valueOf=="function"?e.valueOf():e;e=J(t)?t+"":t}if(typeof e!="string")return e===0?e:+e;e=e.replace(Ke,"");var n=Qe.test(e);return n||Ze.test(e)?et(e.slice(2),n?2:8):Je.test(e)?Ae:+e}xe.exports=ut});var me="code-line";function De(e,t,n){return Math.min(t,Math.max(e,n))}function ge(e,t){return De(0,t-1,e)}var ne=(()=>{let e,t=-1;return n=>{if(!e||n!==t){t=n,e=[{element:document.body,line:0}];for(let r of document.getElementsByClassName(me)){let i=+r.getAttribute("data-line");isNaN(i)||(r.tagName==="CODE"&&r.parentElement&&r.parentElement.tagName==="PRE"?e.push({element:r.parentElement,line:i}):e.push({element:r,line:i}))}}return e}})();function re(e,t){let n=Math.floor(e),r=ne(t),i=r[0]||null;for(let a of r){if(a.line===n)return{previous:a,next:void 0};if(a.line>n)return{previous:i,next:a};i=a}return{previous:i}}function Re(e,t){let n=ne(t),r=e-window.scrollY,i=-1,a=n.length-1;for(;i+1<a;){let d=Math.floor((i+a)/2),m=F(n[d]);m.top+m.height>=r?a=d:i=d}let l=n[a],s=F(l);return a>=1&&s.top>r?{previous:n[i],next:l}:a>1&&a<n.length&&s.top+s.height>r?{previous:l,next:n[a+1]}:{previous:l}}function F({element:e}){let t=e.getBoundingClientRect(),n=e.querySelector(`.${me}`);if(n){let r=n.getBoundingClientRect(),i=Math.max(1,r.top-t.top);return{top:t.top,height:i}}return t}function Y(e,t,n){if(!n.settings?.scrollPreviewWithEditor)return;if(e<=0){window.scroll(window.scrollX,0);return}let{previous:r,next:i}=re(e,t);if(!r)return;let a=0,l=F(r),s=l.top;if(i&&i.line!==r.line){let d=(e-r.line)/(i.line-r.line),m=i.element.getBoundingClientRect().top-s;a=s+d*m}else{let d=e-Math.floor(e);a=s+l.height*d}a=Math.abs(a)<1?Math.sign(a):a,window.scroll(window.scrollX,Math.max(1,window.scrollY+a))}function ie(e,t,n){let r=n.settings?.lineCount??0,{previous:i,next:a}=Re(e,t);if(i){let l=F(i),s=e-window.scrollY-l.top;if(a){let d=s/(F(a).top-l.top),m=i.line+d*(a.line-i.line);return ge(m,r)}else{let d=s/l.height,m=i.line+d;return ge(m,r)}}return null}function pe(e,t){return ne(t).find(n=>n.element.id===e)}var ae=class{onDidChangeTextEditorSelection(t,n){let{previous:r}=re(t,n);this._update(r&&r.element)}_update(t){this._unmarkActiveElement(this._current),this._markActiveElement(t),this._current=t}_unmarkActiveElement(t){!t||(t.className=t.className.replace(/\bcode-active-line\b/g,""))}_markActiveElement(t){!t||(t.className+=" code-active-line")}};function ve(e){document.readyState==="loading"||document.readyState==="uninitialized"?document.addEventListener("DOMContentLoaded",e):e()}var he=(e,t)=>new class{postMessage(n,r){e.postMessage({type:n,source:t.settings.source,body:r})}};function oe(e){let t=document.getElementById("vscode-markdown-preview-data");if(t){let n=t.getAttribute(e);if(n)return JSON.parse(n)}throw new Error(`Could not load data for ${e}`)}var se=class{constructor(){this._settings=oe("data-settings")}get settings(){return this._settings}updateSettings(t){this._settings=t}};var be=11;function _e(e,t){var n=t.attributes,r,i,a,l,s;if(!(t.nodeType===be||e.nodeType===be)){for(var d=n.length-1;d>=0;d--)r=n[d],i=r.name,a=r.namespaceURI,l=r.value,a?(i=r.localName||i,s=e.getAttributeNS(a,i),s!==l&&(r.prefix==="xmlns"&&(i=r.name),e.setAttributeNS(a,i,l))):(s=e.getAttribute(i),s!==l&&e.setAttribute(i,l));for(var m=e.attributes,b=m.length-1;b>=0;b--)r=m[b],i=r.name,a=r.namespaceURI,a?(i=r.localName||i,t.hasAttributeNS(a,i)||e.removeAttributeNS(a,i)):t.hasAttribute(i)||e.removeAttribute(i)}}var $,Be="http://www.w3.org/1999/xhtml",y=typeof document=="undefined"?void 0:document,Ue=!!y&&"content"in y.createElement("template"),He=!!y&&y.createRange&&"createContextualFragment"in y.createRange();function Ie(e){var t=y.createElement("template");return t.innerHTML=e,t.content.childNodes[0]}function Fe(e){$||($=y.createRange(),$.selectNode(y.body));var t=$.createContextualFragment(e);return t.childNodes[0]}function je(e){var t=y.createElement("body");return t.innerHTML=e,t.childNodes[0]}function Ve(e){return e=e.trim(),Ue?Ie(e):He?Fe(e):je(e)}function K(e,t){var n=e.nodeName,r=t.nodeName,i,a;return n===r?!0:(i=n.charCodeAt(0),a=r.charCodeAt(0),i<=90&&a>=97?n===r.toUpperCase():a<=90&&i>=97?r===n.toUpperCase():!1)}function We(e,t){return!t||t===Be?y.createElement(e):y.createElementNS(t,e)}function qe(e,t){for(var n=e.firstChild;n;){var r=n.nextSibling;t.appendChild(n),n=r}return t}function le(e,t,n){e[n]!==t[n]&&(e[n]=t[n],e[n]?e.setAttribute(n,""):e.removeAttribute(n))}var ye={OPTION:function(e,t){var n=e.parentNode;if(n){var r=n.nodeName.toUpperCase();r==="OPTGROUP"&&(n=n.parentNode,r=n&&n.nodeName.toUpperCase()),r==="SELECT"&&!n.hasAttribute("multiple")&&(e.hasAttribute("selected")&&!t.selected&&(e.setAttribute("selected","selected"),e.removeAttribute("selected")),n.selectedIndex=-1)}le(e,t,"selected")},INPUT:function(e,t){le(e,t,"checked"),le(e,t,"disabled"),e.value!==t.value&&(e.value=t.value),t.hasAttribute("value")||e.removeAttribute("value")},TEXTAREA:function(e,t){var n=t.value;e.value!==n&&(e.value=n);var r=e.firstChild;if(r){var i=r.nodeValue;if(i==n||!n&&i==e.placeholder)return;r.nodeValue=n}},SELECT:function(e,t){if(!t.hasAttribute("multiple")){for(var n=-1,r=0,i=e.firstChild,a,l;i;)if(l=i.nodeName&&i.nodeName.toUpperCase(),l==="OPTGROUP")a=i,i=a.firstChild;else{if(l==="OPTION"){if(i.hasAttribute("selected")){n=r;break}r++}i=i.nextSibling,!i&&a&&(i=a.nextSibling,a=null)}e.selectedIndex=n}}},j=1,Xe=11,Te=3,we=8;function R(){}function ze(e){if(e)return e.getAttribute&&e.getAttribute("id")||e.id}function Ge(e){return function(n,r,i){if(i||(i={}),typeof r=="string")if(n.nodeName==="#document"||n.nodeName==="HTML"||n.nodeName==="BODY"){var a=r;r=y.createElement("html"),r.innerHTML=a}else r=Ve(r);var l=i.getNodeKey||ze,s=i.onBeforeNodeAdded||R,d=i.onNodeAdded||R,m=i.onBeforeElUpdated||R,b=i.onElUpdated||R,v=i.onBeforeNodeDiscarded||R,w=i.onNodeDiscarded||R,h=i.onBeforeElChildrenUpdated||R,E=i.childrenOnly===!0,A=Object.create(null),O=[];function x(c){O.push(c)}function I(c,u){if(c.nodeType===j)for(var o=c.firstChild;o;){var f=void 0;u&&(f=l(o))?x(f):(w(o),o.firstChild&&I(o,u)),o=o.nextSibling}}function U(c,u,o){v(c)!==!1&&(u&&u.removeChild(c),w(c),I(c,o))}function q(c){if(c.nodeType===j||c.nodeType===Xe)for(var u=c.firstChild;u;){var o=l(u);o&&(A[o]=u),q(u),u=u.nextSibling}}q(n);function k(c){d(c);for(var u=c.firstChild;u;){var o=u.nextSibling,f=l(u);if(f){var L=A[f];L&&K(u,L)?(u.parentNode.replaceChild(L,u),S(L,u)):k(u)}else k(u);u=o}}function g(c,u,o){for(;u;){var f=u.nextSibling;(o=l(u))?x(o):U(u,c,!0),u=f}}function S(c,u,o){var f=l(u);f&&delete A[f],!(!o&&(m(c,u)===!1||(e(c,u),b(c),h(c,u)===!1)))&&(c.nodeName!=="TEXTAREA"?D(c,u):ye.TEXTAREA(c,u))}function D(c,u){var o=u.firstChild,f=c.firstChild,L,N,H,z,C;e:for(;o;){for(z=o.nextSibling,L=l(o);f;){if(H=f.nextSibling,o.isSameNode&&o.isSameNode(f)){o=z,f=H;continue e}N=l(f);var G=f.nodeType,M=void 0;if(G===o.nodeType&&(G===j?(L?L!==N&&((C=A[L])?H===C?M=!1:(c.insertBefore(C,f),N?x(N):U(f,c,!0),f=C):M=!1):N&&(M=!1),M=M!==!1&&K(f,o),M&&S(f,o)):(G===Te||G==we)&&(M=!0,f.nodeValue!==o.nodeValue&&(f.nodeValue=o.nodeValue))),M){o=z,f=H;continue e}N?x(N):U(f,c,!0),f=H}if(L&&(C=A[L])&&K(C,o))c.appendChild(C),S(C,o);else{var te=s(o);te!==!1&&(te&&(o=te),o.actualize&&(o=o.actualize(c.ownerDocument||y)),c.appendChild(o),k(o))}o=z,f=H}g(c,f,N);var fe=ye[c.nodeName];fe&&fe(c,u)}var p=n,X=p.nodeType,de=r.nodeType;if(!E){if(X===j)de===j?K(n,r)||(w(n),p=qe(n,We(r.nodeName,r.namespaceURI))):p=r;else if(X===Te||X===we){if(de===X)return p.nodeValue!==r.nodeValue&&(p.nodeValue=r.nodeValue),p;p=r}}if(p===r)w(n);else{if(r.isSameNode&&r.isSameNode(p))return;if(S(p,r,E),O)for(var Z=0,Oe=O.length;Z<Oe;Z++){var ee=A[O[Z]];ee&&U(ee,ee.parentNode,!1)}}return!E&&p!==n&&n.parentNode&&(p.actualize&&(p=p.actualize(n.ownerDocument||y)),n.parentNode.replaceChild(p,n)),p}}var Ye=Ge(_e),Se=Ye;var Ce=Ne(),_=0,ft=new ae,T=new se,P=0,Q=T.settings.source,V=acquireVsCodeApi(),Me=V.getState(),B={...typeof Me=="object"?Me:{},...oe("data-state")};V.setState(B);var W=he(V,T);window.cspAlerter.setPoster(W);window.styleLoadingMonitor.setPoster(W);function ce(e){let t=document.getElementsByTagName("img");if(t.length>0){let n=Array.from(t,r=>r.complete?Promise.resolve():new Promise(i=>{r.addEventListener("load",()=>i()),r.addEventListener("error",()=>i())}));Promise.all(n).then(()=>setTimeout(e,0))}else setTimeout(e,0)}ve(()=>{let e=B.scrollProgress;if(typeof e=="number"&&!T.settings.fragment){ce(()=>{_+=1,window.scrollTo(0,e*document.body.clientHeight)});return}T.settings.scrollPreviewWithEditor&&ce(()=>{if(T.settings.fragment){B.fragment=void 0,V.setState(B);let t=pe(T.settings.fragment,P);t&&(_+=1,Y(t.line,P,T))}else isNaN(T.settings.line)||(_+=1,Y(T.settings.line,P,T))})});var mt=(()=>{let e=Ce(t=>{_+=1,ce(()=>Y(t,P,T))},50);return t=>{isNaN(t)||(B.line=t,e(t))}})();window.addEventListener("resize",()=>{_+=1,Pe()},!0);window.addEventListener("message",async e=>{switch(e.data.type){case"onDidChangeTextEditorSelection":e.data.source===Q&&ft.onDidChangeTextEditorSelection(e.data.line,P);return;case"updateView":e.data.source===Q&&mt(e.data.line);return;case"updateContent":{let t=document.querySelector(".markdown-body"),r=new DOMParser().parseFromString(e.data.content,"text/html");for(let i of Array.from(r.querySelectorAll("meta")))i.hasAttribute("http-equiv")&&i.remove();if(e.data.source!==Q)t.replaceWith(r.querySelector(".markdown-body")),Q=e.data.source;else{let i=(s,d)=>{if(s.isEqualNode(d))return!0;if(s.tagName!==d.tagName||s.textContent!==d.textContent)return!1;let m=s.attributes,b=d.attributes;if(m.length!==b.length)return!1;for(let h=0;h<m.length;++h){let E=m[h],A=b[h];if(E.name!==A.name||E.value!==A.value&&E.name!=="data-line")return!1}let v=Array.from(s.children),w=Array.from(d.children);return v.length===w.length&&v.every((h,E)=>i(h,w[E]))},a=r.querySelector(".markdown-body"),l=a.querySelectorAll("link");for(let s of l)s.remove();a.prepend(...l),Se(t,a,{childrenOnly:!0,onBeforeElUpdated:(s,d)=>{if(i(s,d)){let m=s.querySelectorAll("[data-line]"),b=s.querySelectorAll("[data-line]");m.length!==b.length&&console.log("unexpected line number change");for(let v=0;v<m.length;++v){let w=m[v],h=b[v];h&&w.setAttribute("data-line",h.getAttribute("data-line"))}return!1}return!0}})}++P,window.dispatchEvent(new CustomEvent("vscode.markdown.updateContent"));break}}},!1);document.addEventListener("dblclick",e=>{if(!T.settings.doubleClickToSwitchToEditor)return;for(let r=e.target;r;r=r.parentNode)if(r.tagName==="A")return;let t=e.pageY,n=ie(t,P,T);typeof n=="number"&&!isNaN(n)&&W.postMessage("didClick",{line:Math.floor(n)})});var gt=["http:","https:","mailto:","vscode:","vscode-insiders:"];document.addEventListener("click",e=>{if(!e)return;let t=e.target;for(;t;){if(t.tagName&&t.tagName==="A"&&t.href){if(t.getAttribute("href").startsWith("#"))return;let n=t.getAttribute("data-href");if(!n){if(gt.some(r=>t.href.startsWith(r)))return;n=t.getAttribute("href")}if(!/^[a-z\-]+:/i.test(n)){W.postMessage("openLink",{href:n}),e.preventDefault(),e.stopPropagation();return}return}t=t.parentNode}},!0);window.addEventListener("scroll",Ce(()=>{if(Pe(),_>0)_-=1;else{let e=ie(window.scrollY,P,T);typeof e=="number"&&!isNaN(e)&&W.postMessage("revealLine",{line:e})}},50));function Pe(){B.scrollProgress=window.scrollY/document.body.clientHeight,V.setState(B)}
