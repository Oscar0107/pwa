if(!self.define){let e,i={};const r=(r,s)=>(r=new URL(r+".js",s).href,i[r]||new Promise((i=>{if("document"in self){const e=document.createElement("script");e.src=r,e.onload=i,document.head.appendChild(e)}else e=r,importScripts(r),i()})).then((()=>{let e=i[r];if(!e)throw new Error(`Module ${r} didn’t register its module`);return e})));self.define=(s,o)=>{const t=e||("document"in self?document.currentScript.src:"")||location.href;if(i[t])return;let n={};const c=e=>r(e,t),f={module:{uri:t},exports:n,require:c};i[t]=Promise.all(s.map((e=>f[e]||c(e)))).then((e=>(o(...e),n)))}}define(["./workbox-1fbe7069"],(function(e){"use strict";self.addEventListener("message",(e=>{e.data&&"SKIP_WAITING"===e.data.type&&self.skipWaiting()})),e.precacheAndRoute([{url:"index.php",revision:"85327b63e77c7d25b18aa142fae56459"},{url:"logo.jpg",revision:"1981f2d3aa27252e2646fe088e7cdc4f"},{url:"manifest.json",revision:"34480f53a81231406db6e2cb4c4b5ac5"},{url:"script.js",revision:"d41d8cd98f00b204e9800998ecf8427e"}],{ignoreURLParametersMatching:[/^utm_/,/^fbclid$/]})}));
//# sourceMappingURL=sw.js.map