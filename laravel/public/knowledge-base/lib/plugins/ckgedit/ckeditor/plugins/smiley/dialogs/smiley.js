CKEDITOR.dialog.add("smiley",function(m){var f=m.config,c=m.lang.smiley,o=f.smiley_images,g=f.smiley_columns||8,j;var n;var p=function(i){var u=i.data.getTarget(),t=u.getName();if(t=="a"){u=u.getChild(0)}else{if(t!="img"){return}}var w=u.getAttribute("cke_src"),v=u.getAttribute("title");var s=m.document.createElement("img",{attributes:{src:w,"data-cke-saved-src":w,title:v,alt:v,width:22,height:22}});m.insertElement(s);n.hide();i.data.preventDefault()};var h=CKEDITOR.tools.addFunction(function(s,i){s=new CKEDITOR.dom.event(s);i=new CKEDITOR.dom.element(i);var u,t;var w=s.getKeystroke(),v=m.lang.dir=="rtl";switch(w){case 38:if((u=i.getParent().getParent().getPrevious())){t=u.getChild([i.getParent().getIndex(),0]);t.focus()}s.preventDefault();break;case 40:if((u=i.getParent().getParent().getNext())){t=u.getChild([i.getParent().getIndex(),0]);if(t){t.focus()}}s.preventDefault();break;case 32:p({data:s});s.preventDefault();break;case v?37:39:if((u=i.getParent().getNext())){t=u.getChild(0);t.focus();s.preventDefault(true)}else{if((u=i.getParent().getParent().getNext())){t=u.getChild([0,0]);if(t){t.focus()}s.preventDefault(true)}}break;case v?39:37:if((u=i.getParent().getPrevious())){t=u.getChild(0);t.focus();s.preventDefault(true)}else{if((u=i.getParent().getParent().getPrevious())){t=u.getLast().getChild(0);t.focus();s.preventDefault(true)}}break;default:return}});var b=function(i,t){k.push("<tr>");for(j=0;j<i.length;j++){var s=i[j][0];k.push('<td colspan="4" class="cke_dark_background cke_centered" style="vertical-align: middle;" role="presentation"><a href="javascript:void(0)" role="option"',' aria-posinset="'+(j+1)+'"',' aria-setsize="'+r+'"',' aria-labelledby="'+d+'"',' class="cke_smile cke_hand" tabindex="-1" onkeydown="CKEDITOR.tools.callFunction( ',h,', event, this );">','<img class="cke_hand doku" title="',s,'" cke_src="',CKEDITOR.tools.htmlEncode(f.dokuSmileyPath+i[j][1]),'" alt="',s,'"',' src="',CKEDITOR.tools.htmlEncode(f.dokuSmileyPath+i[j][1]),'"',(CKEDITOR.env.ie?" onload=\"this.setAttribute('width', 2); this.removeAttribute('width');\" ":""),'><span id="'+d+'" class="cke_voice_label">'+s+"</span></a>","</td>");if(j%2===0&&j>0&&t==2){k.push("</tr><tr>")}}k.push("</tr>")};var a=CKEDITOR.tools.getNextId()+"_smiley_emtions_label";var k=['<div style="background-color: #dedede"><span id="'+a+'" class="cke_voice_label">'+c.options+"</span>",'<table role="listbox" aria-labelledby="'+a+'" style="width:100%;height:100%;border-collapse:separate;" cellspacing="2" cellpadding="2"',CKEDITOR.env.ie&&CKEDITOR.env.quirks?' style="position:absolute;"':"","><tbody>"];var e;if(f.dokuSmileyConfImages){e=f.dokuSmileyConfImages}else{e=f.dokuSmileyImages}var r=e.length;for(j=0;j<r;j++){if(j%g===0){k.push('<tr role="presentation">')}if(!e[j][1]){continue}var d="cke_smile_label_"+j+"_"+CKEDITOR.tools.getNextNumber();var l=e[j][0];k.push('<td class="cke_dark_background cke_centered" style="vertical-align: middle;" role="presentation"><a href="javascript:void(0)" role="option"',' aria-posinset="'+(j+1)+'"',' aria-setsize="'+r+'"',' aria-labelledby="'+d+'"',' class="cke_smile cke_hand" tabindex="-1" onkeydown="CKEDITOR.tools.callFunction( ',h,', event, this );">','<img class="cke_hand doku" title="',l,'" cke_src="',CKEDITOR.tools.htmlEncode(f.dokuSmileyPath+e[j][1]),'" alt="',l,'"',' src="',CKEDITOR.tools.htmlEncode(f.dokuSmileyPath+e[j][1]),'"',(CKEDITOR.env.ie?" onload=\"this.setAttribute('width', 2); this.removeAttribute('width');\" ":""),'><span id="'+d+'" class="cke_voice_label">'+l+"</span></a>","</td>");if(j%g==g-1){k.push("</tr>")}}if(j<g-1){for(;j<g-1;j++){k.push("<td></td>")}k.push("</tr>")}e=f.dokuFixmeSmiley;b(f.dokuFixmeSmiley,1);if(f.dokuLargeSmiley){b(f.dokuLargeSmiley,2)}var r=o.length;for(j=0;j<r;j++){if(j%g===0){k.push('<tr role="presentation">')}var d="cke_smile_label_"+j+"_"+CKEDITOR.tools.getNextNumber();k.push('<td class="cke_dark_background cke_centered" style="vertical-align: middle;" role="presentation"><a href="javascript:void(0)" role="option"',' aria-posinset="'+(j+1)+'"',' aria-setsize="'+r+'"',' aria-labelledby="'+d+'"',' class="cke_smile cke_hand" tabindex="-1" onkeydown="CKEDITOR.tools.callFunction( ',h,', event, this );">','<img class="cke_hand" title="',f.smiley_descriptions[j],'" cke_src="',CKEDITOR.tools.htmlEncode(f.smiley_path+o[j]),'" alt="',f.smiley_descriptions[j],'"',' src="',CKEDITOR.tools.htmlEncode(f.smiley_path+o[j]),'"',(CKEDITOR.env.ie?" onload=\"this.setAttribute('width', 2); this.removeAttribute('width');\" ":""),'><span id="'+d+'" class="cke_voice_label">'+f.smiley_descriptions[j]+"</span></a>","</td>");if(j%g==g-1){k.push("</tr>")}}if(j<g-1){for(;j<g-1;j++){k.push("<td></td>")}k.push("</tr>")}k.push("</tbody></table></div>");var q={type:"html",id:"smileySelector",html:k.join(""),onLoad:function(i){n=i.sender},focus:function(){var i=this;setTimeout(function(){var s=i.getElement().getElementsByTag("a").getItem(0);s.focus()},0)},onClick:p,style:"width: 100%; border-collapse: separate;"};return{title:m.lang.smiley.title,minWidth:325,minHeight:180,contents:[{id:"tab1",label:"",title:"",expand:true,padding:0,elements:[q]}],buttons:[CKEDITOR.dialog.cancelButton]}});