(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-14f90334"],{"8db2":function(e,t){e.exports={props:{id:{type:String,required:!0},name:{type:String,required:!0},value:{type:null,default:null},type:{type:String,required:!0},length:{type:[String,Number],default:null},readonly:{type:Boolean,default:!1},collection:{type:String,default:null},primaryKey:{type:[Number,String],default:null},required:{type:Boolean,default:!1},options:{type:Object,default:()=>({})},newItem:{type:Boolean,default:!1},relation:{type:Object,default:null},fields:{type:Object,default:null},values:{type:Object,default:null},width:{type:String,default:null,validator(e){return["half","half-left","half-right","full","fill"].includes(e)}}}}},aab6:function(e,t,l){},bbba:function(e,t,l){"use strict";l.r(t);var n=function(){var e=this,t=e.$createElement,l=e._self._c||t;return l("v-input",{staticClass:"slug",attrs:{id:e.name,type:"text",value:e.value,readonly:e.disabled,placeholder:e.options.placeholder,maxlength:e.length},on:{input:e.updateValue}})},a=[],i=(l("d3b7"),l("ddb0"),l("d3bd")),u=l.n(i),r=l("8db2"),d=l.n(r),o={mixins:[d.a],computed:{mirror:function(){var e=this.options.mirroredField;return this.values[e]},disabled:function(){return!0===this.readonly||!0===this.options.onlyOnCreate&&!1===this.newItem}},watch:{mirror:function(){this.updateValue(this.mirror)}},methods:{updateValue:function(e){this.disabled||this.$emit("input",u()(e,{lower:this.options.forceLowercase}))}}},s=o,p=(l("d3e7"),l("2877")),f=Object(p["a"])(s,n,a,!1,null,"f75fbe92",null);t["default"]=f.exports},d3e7:function(e,t,l){"use strict";var n=l("aab6"),a=l.n(n);a.a}}]);
//# sourceMappingURL=chunk-14f90334.e9e271ed.js.map