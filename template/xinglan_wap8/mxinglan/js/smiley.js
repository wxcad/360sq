function CRid(id) {
    return ! id ? null: document.getElementById(id)
}
function CR_smilies_data(divid, textid) {
    if (!smilies_array[1] || !CRid(divid)) return;
    smiliesdata = '<div class="wi_smy cl">';
    for (var i = 0; i < smilies_array[1][1].length; i++) {
        var s = smilies_array[1][1][i];
        var smilieimg = STATICURL + 'image/smiley/' + smilies_type['_1'][1] + '/' + s[2];
        smiliesdata += '<li onclick="CR_insertText(CRid(\'' + textid + '\'),\'' + s[1] + '\')"><img id="smilie_' + s[0] + '" width="' + s[3] + '" height="' + s[4] + '" src="' + smilieimg + '" /></li>';
    }
    smiliesdata += '</ul>';
    CRid(divid).innerHTML = smiliesdata;
}
function CR_insertText(obj, str) {
    obj.focus();
    if (document.selection) {
        var sel = document.selection.createRange();
        sel.text = str;
    } else if (typeof obj.selectionStart === 'number' && typeof obj.selectionEnd === 'number') {
        var startPos = obj.selectionStart,
        endPos = obj.selectionEnd,
        cursorPos = startPos,
        tmpStr = obj.value;
        obj.value = tmpStr.substring(0, startPos) + str + tmpStr.substring(endPos, tmpStr.length);
        cursorPos += str.length;
        obj.selectionStart = obj.selectionEnd = cursorPos;
    } else {
        obj.value += str;
    }
}
		