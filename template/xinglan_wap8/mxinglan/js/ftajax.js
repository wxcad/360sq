<script type="text/javascript" id="lmTmbVVclVTcTqUcllkZfngWXYbgXWWW" charset="UTF-8" src="static/js/ajax.js?r39"></script>
static/js/ajax.js
<script type="text/javascript" id="laVculnWAuLutKHpnDEqnnEQOKPSJsYp" charset="UTF-8">
var s = '<p><a id="commonforum" href="javascript:;" onclick="switchforums(this, 1, \'common\')" class="pbsb lightlink">常用版块</a></p>';
var lis = $('fs_group').getElementsByTagName('LI');
for(i = 0;i < lis.length;i++) {
var gid = lis[i].getAttribute('fid');
if($('fs_forum_' + gid)) {
s += '<p><a href="javascript:;" ondblclick="locationforums(1, ' + gid + ')" onclick="switchforums(this, 1, ' + gid + ')" class="pbsb">' + lis[i].innerHTML + '</a></p>';
}

}
$('block_group').innerHTML = s;
var lastswitchobj = null;
var selectfid = 0;
var switchforum = switchsubforum = '';

switchforums($('commonforum'), 1, 'common');

function switchforums(obj, block, fid) {
if(lastswitchobj != obj) {
if(lastswitchobj) {
lastswitchobj.parentNode.className = '';
}
obj.parentNode.className = 'pbls';
}
var s = '';
if(fid != 'common') {
$('enterbtn').className = 'xi2';
currentblock = block;
currentfid = fid;
} else {
$('enterbtn').className = 'xg1';
}
if(block == 1) {
var lis = $('fs_forum_' + fid).getElementsByTagName('LI');
for(i = 0;i < lis.length;i++) {
fid = lis[i].getAttribute('fid');
if(fid != '') {
s += '<p><a href="javascript:;" ondblclick="locationforums(2, ' + fid + '\)" onclick="switchforums(this, 2, ' + fid + ')"' + ($('fs_subforum_' + fid) ?  ' class="pbsb"' : '') + '>' + lis[i].innerHTML + '</a></p>';
}
}
$('block_forum').innerHTML = s;
$('block_subforum').innerHTML = '';
switchforum = switchsubforum = '';
selectfid = 0;
$('postbtn').setAttribute("disabled", "disabled");
$('postbtn').className = 'pn xg1 y';
} else if(block == 2) {
selectfid = fid;
if($('fs_subforum_' + fid)) {
var lis = $('fs_subforum_' + fid).getElementsByTagName('LI');
for(i = 0;i < lis.length;i++) {
fid = lis[i].getAttribute('fid');
s += '<p><a href="javascript:;" ondblclick="locationforums(3, ' + fid + ')" onclick="switchforums(this, 3, ' + fid + ')">' + lis[i].innerHTML + '</a></p>';
}
$('block_subforum').innerHTML = s;
} else {
$('block_subforum').innerHTML = '';
}
switchforum = obj.innerHTML;
switchsubforum = '';
$('postbtn').removeAttribute("disabled");
$('postbtn').className = 'pn pnc y';
} else {
selectfid = fid;
switchsubforum = obj.innerHTML;
$('postbtn').removeAttribute("disabled");
$('postbtn').className = 'pn pnc y';
}
lastswitchobj = obj;
$('pbnv').innerHTML = switchforum ? '&nbsp;&gt;&nbsp;' + switchforum + (switchsubforum ? '&nbsp;&gt;&nbsp;' + switchsubforum : '') : '';
}

function locationforums(block, fid) {
location.href = block == 1 ? 'forum.php?gid=' + fid : 'forum.php?mod=forumdisplay&fid=' + fid;
}

</script>