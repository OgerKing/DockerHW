CKEDITOR.dialog.add("tagsDialog",function(e){var b={};var h=e.lang.tags;var a="test";var c=e.tags_pos();var f=function(){var l=e.document.$.children[0].children[1].innerHTML.replace(/<[^<>]*>/g,"").replace(/&gt;/g,">");var o=(/\{\{tag>.*?\}\}/g);var n=o.exec(l);var m=[];var k=function(q){if(n!=null){var s=new RegExp("( |>)"+q.toUpperCase()+"( |})","g");for(var r=0;r<n.length;r++){if(s.test(n[r].toUpperCase())){return true}}return false}else{return false}};b=e.existing_tags();var p={type:"hbox",children:[]};m[m.length]=p;for(var j=0;j<b.length;j++){p.children[p.children.length]={type:"checkbox",id:b[j].id,label:b[j].name,"default":b[j].name==""?"":(k(b[j].id)?"checked":""),userdef:false};if(((j%5)==4)&&((j+1)<b.length-1)){p={type:"hbox",children:[]};m[m.length]=p}}m[m.length]={type:"checkbox",id:"",label:"","default":"",userdef:false};var d=m[m.length-1];d.userdef=true;d.id="user_def_box";d.label=h.customTags;m[m.length-1]={type:"vbox",children:[d,{type:"text",id:"user_def_text"},{type:"html",html:h.info},{type:"radio",id:"which",label:h.radioLabel,items:[[h.bottom,"bottom"],[h.cursor,"cursor"],[h.top,"top"]],style:"color: green","default":c,onClick:function(){}}]};return m};var g={title:h.dlgTitle,minWidth:500,minHeight:200,contents:[{id:"tab-basic",label:"Settings",elements:f()}],onOk:function(){var k=this;var m="{{tag>";var j="}}";var l="";var n="unset";var k=this;for(var d=0;d<b.length;d++){l+=k.getValueOf("tab-basic",b[d].id)?b[d].id+" ":""}l+=k.getValueOf("tab-basic","user_def_box")?k.getValueOf("tab-basic","user_def_text")+" ":"";n=k.getValueOf("tab-basic","which");l=l.replace(/\s+$/,"");data=e.getData();l="{{tag&gt;"+l+"}}";if(n=="cursor"){e.insertHtml(l)}else{if(n=="top"){e.setData(l+data.replace(/\{\{tag&gt;.*?\}\}/g,""))}else{e.setData(data.replace(/\{\{tag&gt;.*?\}\}/g,"")+l)}}},onShow:function(){var p=this;var j="";var l;var q="";for(var m=0;m<b.length;m++){j+=p.getValueOf("tab-basic",b[m].id)?b[m].id+" ":""}var o=e.document.$.children[0].children[1].innerHTML.replace(/<[^<>]*>/g,"").replace(/&gt;/g,">");var k=(/\{\{tag>(.*?)\}\}/g);var n=k.exec(o);if(!n){return}n[1]=n[1].replace(/&nbsp;/g,"  ");n[1]=n[1].replace(/\s+/g," ");l=n[1].split(/\s/);jQuery("table[class*='dialog'] :checkbox[class*='cke']").each(function(r){var s=jQuery("label[for="+this.id+"]").text();var i=s.match(/^[\w\-\d]+$/);if(i&&!l.includes(s)){jQuery(this).prop("checked",false)}else{if(i&&l.includes(s)&&!jQuery(this).prop("checked")){jQuery(this).prop("checked",true);j+=s+" "}}});for(m=0;m<l.length;m++){var d=new RegExp(l[m]);if(!j.match(d)){q+=l[m]+" "}}if(q){q=q.replace(/\s+$/,"");p.setValueOf("tab-basic","user_def_box",1);p.setValueOf("tab-basic","user_def_text",q)}}};return g});