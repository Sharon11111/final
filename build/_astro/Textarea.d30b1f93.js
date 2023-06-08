import{r as s,R as C}from"./index.37e2c5d5.js";import{_ as U,c as V,u as X,t as Z,w as J}from"./Layout.a5883026.js";import{I as T}from"./Input.103623ff.js";function Q(n,t){if(n==null)return{};var e={},r=Object.keys(n),i,a;for(a=0;a<r.length;a++)i=r[a],!(t.indexOf(i)>=0)&&(e[i]=n[i]);return e}var ee=s.useLayoutEffect,te=function(t){var e=s.useRef(t);return ee(function(){e.current=t}),e},I=function(t,e){if(typeof t=="function"){t(e);return}t.current=e},re=function(t,e){var r=s.useRef();return s.useCallback(function(i){t.current=i,r.current&&I(r.current,null),r.current=e,e&&I(e,i)},[e])},F={"min-height":"0","max-height":"none",height:"0",visibility:"hidden",overflow:"hidden",position:"absolute","z-index":"-1000",top:"0",right:"0"},j=function(t){Object.keys(F).forEach(function(e){t.style.setProperty(e,F[e],"important")})},o=null,ne=function(t,e){var r=t.scrollHeight;return e.sizingStyle.boxSizing==="border-box"?r+e.borderSize:r-e.paddingSize};function ie(n,t,e,r){e===void 0&&(e=1),r===void 0&&(r=1/0),o||(o=document.createElement("textarea"),o.setAttribute("tabindex","-1"),o.setAttribute("aria-hidden","true"),j(o)),o.parentNode===null&&document.body.appendChild(o);var i=n.paddingSize,a=n.borderSize,d=n.sizingStyle,f=d.boxSizing;Object.keys(d).forEach(function(v){var m=v;o.style[m]=d[m]}),j(o),o.value=t;var u=ne(o,n);o.value="x";var h=o.scrollHeight-i,l=h*e;f==="border-box"&&(l=l+i+a),u=Math.max(l,u);var p=h*r;return f==="border-box"&&(p=p+i+a),u=Math.min(p,u),[u,h]}var A=function(){},ae=function(t,e){return t.reduce(function(r,i){return r[i]=e[i],r},{})},oe=["borderBottomWidth","borderLeftWidth","borderRightWidth","borderTopWidth","boxSizing","fontFamily","fontSize","fontStyle","fontWeight","letterSpacing","lineHeight","paddingBottom","paddingLeft","paddingRight","paddingTop","tabSize","textIndent","textRendering","textTransform","width","wordBreak"],se=!!document.documentElement.currentStyle,de=function(t){var e=window.getComputedStyle(t);if(e===null)return null;var r=ae(oe,e),i=r.boxSizing;if(i==="")return null;se&&i==="border-box"&&(r.width=parseFloat(r.width)+parseFloat(r.borderRightWidth)+parseFloat(r.borderLeftWidth)+parseFloat(r.paddingRight)+parseFloat(r.paddingLeft)+"px");var a=parseFloat(r.paddingBottom)+parseFloat(r.paddingTop),d=parseFloat(r.borderBottomWidth)+parseFloat(r.borderTopWidth);return{sizingStyle:r,paddingSize:a,borderSize:d}},ue=function(t){var e=te(t);s.useLayoutEffect(function(){var r=function(a){e.current(a)};return window.addEventListener("resize",r),function(){window.removeEventListener("resize",r)}},[])},le=function(t,e){var r=t.cacheMeasurements,i=t.maxRows,a=t.minRows,d=t.onChange,f=d===void 0?A:d,u=t.onHeightChange,h=u===void 0?A:u,l=Q(t,["cacheMeasurements","maxRows","minRows","onChange","onHeightChange"]),p=l.value!==void 0,v=s.useRef(null),m=re(v,e),g=s.useRef(0),x=s.useRef(),y=function(){var c=v.current,w=r&&x.current?x.current:de(c);if(w){x.current=w;var _=ie(w,c.value||c.placeholder||"x",a,i),b=_[0],E=_[1];g.current!==b&&(g.current=b,c.style.setProperty("height",b+"px","important"),h(b,{rowHeight:E}))}},z=function(c){p||y(),f(c)};return s.useLayoutEffect(y),ue(y),s.createElement("textarea",U({},l,{onChange:z,ref:m}))},pe=s.forwardRef(le);const ce=pe;var fe=V(n=>({input:{paddingTop:n.spacing.xs,paddingBottom:n.spacing.xs}}));const he=fe;var ge=Object.defineProperty,ve=Object.defineProperties,me=Object.getOwnPropertyDescriptors,R=Object.getOwnPropertySymbols,B=Object.prototype.hasOwnProperty,M=Object.prototype.propertyIsEnumerable,k=(n,t,e)=>t in n?ge(n,t,{enumerable:!0,configurable:!0,writable:!0,value:e}):n[t]=e,S=(n,t)=>{for(var e in t||(t={}))B.call(t,e)&&k(n,e,t[e]);if(R)for(var e of R(t))M.call(t,e)&&k(n,e,t[e]);return n},O=(n,t)=>ve(n,me(t)),xe=(n,t)=>{var e={};for(var r in n)B.call(n,r)&&t.indexOf(r)<0&&(e[r]=n[r]);if(n!=null&&R)for(var r of R(n))t.indexOf(r)<0&&M.call(n,r)&&(e[r]=n[r]);return e};const ye={autosize:!1,size:"sm",__staticSelector:"Textarea"},be=s.forwardRef((n,t)=>{const e=X("Textarea",ye,n),{autosize:r,maxRows:i,minRows:a,label:d,error:f,description:u,id:h,className:l,required:p,style:v,wrapperProps:m,classNames:g,styles:x,size:y,__staticSelector:z,sx:P,errorProps:c,descriptionProps:w,labelProps:_,inputWrapperOrder:b,inputContainer:E,unstyled:H,withAsterisk:$,variant:L}=e,D=xe(e,["autosize","maxRows","minRows","label","error","description","id","className","required","style","wrapperProps","classNames","styles","size","__staticSelector","sx","errorProps","descriptionProps","labelProps","inputWrapperOrder","inputContainer","unstyled","withAsterisk","variant"]),W=Z(h),{classes:q,cx:Y}=he(),{systemStyles:G,rest:K}=J(D),N=S({required:p,ref:t,error:f,id:W,classNames:O(S({},g),{input:Y(q.input,g?.input)}),styles:x,__staticSelector:z,size:y,multiline:!0,unstyled:H,variant:L},K);return C.createElement(T.Wrapper,S(S({label:d,error:f,id:W,description:u,required:p,style:v,className:l,classNames:g,styles:x,size:y,__staticSelector:z,sx:P,errorProps:c,labelProps:_,descriptionProps:w,inputContainer:E,inputWrapperOrder:b,unstyled:H,withAsterisk:$,variant:L},G),m),r?C.createElement(T,O(S({},N),{component:ce,maxRows:i,minRows:a})):C.createElement(T,O(S({},N),{component:"textarea",rows:a})))});be.displayName="@mantine/core/Textarea";export{be as T};