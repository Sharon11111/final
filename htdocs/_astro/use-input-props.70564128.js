import{u as W,x as R,z as V}from"./Layout.5758eb4e.js";var k=Object.defineProperty,B=Object.defineProperties,F=Object.getOwnPropertyDescriptors,p=Object.getOwnPropertySymbols,y=Object.prototype.hasOwnProperty,v=Object.prototype.propertyIsEnumerable,u=(r,e,t)=>e in r?k(r,e,{enumerable:!0,configurable:!0,writable:!0,value:t}):r[e]=t,a=(r,e)=>{for(var t in e||(e={}))y.call(e,t)&&u(r,t,e[t]);if(p)for(var t of p(e))v.call(e,t)&&u(r,t,e[t]);return r},G=(r,e)=>B(r,F(e)),H=(r,e)=>{var t={};for(var s in r)y.call(r,s)&&e.indexOf(s)<0&&(t[s]=r[s]);if(r!=null&&p)for(var s of p(r))e.indexOf(s)<0&&v.call(r,s)&&(t[s]=r[s]);return t};function K(r,e,t){const s=W(r,e,t),{label:O,description:m,error:l,required:P,classNames:o,styles:i,className:w,unstyled:n,__staticSelector:_,sx:b,errorProps:S,labelProps:g,descriptionProps:x,wrapperProps:h,id:j,size:c,style:N,inputContainer:I,inputWrapperOrder:z,withAsterisk:C,variant:d}=s,D=H(s,["label","description","error","required","classNames","styles","className","unstyled","__staticSelector","sx","errorProps","labelProps","descriptionProps","wrapperProps","id","size","style","inputContainer","inputWrapperOrder","withAsterisk","variant"]),f=R(j),{systemStyles:q,rest:A}=V(D),E=a({label:O,description:m,error:l,required:P,classNames:o,className:w,__staticSelector:_,sx:b,errorProps:S,labelProps:g,descriptionProps:x,unstyled:n,styles:i,id:f,size:c,style:N,inputContainer:I,inputWrapperOrder:z,withAsterisk:C,variant:d},h);return G(a({},A),{classNames:o,styles:i,unstyled:n,wrapperProps:a(a({},E),q),inputProps:{required:P,classNames:o,styles:i,unstyled:n,id:f,size:c,__staticSelector:_,error:l,variant:d}})}export{K as u};