"use strict";(function(c,a){typeof exports=="object"?module.exports=a():c.MonacoBootstrap=a()})(this,function(){const c=typeof require=="function"?require("module"):void 0,a=typeof require=="function"?require("path"):void 0,f=typeof require=="function"?require("fs"):void 0;Error.stackTraceLimit=100,typeof process!="undefined"&&process.on("SIGPIPE",()=>{console.error(new Error("Unexpected SIGPIPE"))});function h(e){if(!a||!c||typeof process=="undefined"){console.warn("enableASARSupport() is only available in node.js environments");return}const n=e?a.join(e,"node_modules"):a.join(__dirname,"../node_modules");let r;if(e&&process.platform==="win32"){const s=e.substr(0,1);let i;s.toLowerCase()!==s?i=s.toLowerCase():i=s.toUpperCase(),r=i+n.substr(1)}else r=void 0;const t=`${n}.asar`,A=r?`${r}.asar`:void 0,u=c._resolveLookupPaths;c._resolveLookupPaths=function(s,i){const o=u(s,i);if(Array.isArray(o)){let d=!1;for(let l=0,g=o.length;l<g;l++)if(o[l]===n){d=!0,o.splice(l,0,t);break}else if(o[l]===r){d=!0,o.splice(l,0,A);break}!d&&e&&o.push(t)}return o}}function L(e,n){let r=e.replace(/\\/g,"/");r.length>0&&r.charAt(0)!=="/"&&(r=`/${r}`);let t;return n.isWindows&&r.startsWith("//")?t=encodeURI(`${n.scheme||"file"}:${r}`):t=encodeURI(`${n.scheme||"file"}://${n.fallbackAuthority||""}${r}`),t.replace(/#/g,"%23")}function N(){const e=S();let n={availableLanguages:{}};if(e&&e.env.VSCODE_NLS_CONFIG)try{n=JSON.parse(e.env.VSCODE_NLS_CONFIG)}catch{}if(n._resolvedLanguagePackCoreLocation){const r=Object.create(null);n.loadBundle=function(t,A,u){const s=r[t];if(s){u(void 0,s);return}v(n._resolvedLanguagePackCoreLocation,`${t.replace(/\//g,"!")}.nls.json`).then(function(i){const o=JSON.parse(i);r[t]=o,u(void 0,o)}).catch(i=>{try{n._corruptedFile&&b(n._corruptedFile,"corrupted").catch(function(o){console.error(o)})}finally{u(i,void 0)}})}}return n}function p(){return(typeof self=="object"?self:typeof global=="object"?global:{}).vscode}function S(){const e=p();if(e)return e.process;if(typeof process!="undefined")return process}function _(){const e=p();if(e)return e.ipcRenderer}async function v(...e){const n=_();if(n)return n.invoke("vscode:readNlsFile",...e);if(f&&a)return(await f.promises.readFile(a.join(...e))).toString();throw new Error("Unsupported operation (read NLS files)")}function b(e,n){const r=_();if(r)return r.invoke("vscode:writeNlsFile",e,n);if(f)return f.promises.writeFile(e,n);throw new Error("Unsupported operation (write NLS files)")}function E(){if(typeof process=="undefined"){console.warn("avoidMonkeyPatchFromAppInsights() is only available in node.js environments");return}process.env.APPLICATION_INSIGHTS_NO_DIAGNOSTIC_CHANNEL=!0,global.diagnosticsSource={}}return{enableASARSupport:h,avoidMonkeyPatchFromAppInsights:E,setupNLS:N,fileUriFromPath:L}});

//# sourceMappingURL=https://ticino.blob.core.windows.net/sourcemaps/8dfae7a5cd50421d10cd99cb873990460525a898/core/bootstrap.js.map
