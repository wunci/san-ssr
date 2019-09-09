<?php $render = function ($data, $noDataOutput) {
function _id1($data, $noDataOutput = false, $parentCtx = [], $tagName = null, $sourceSlots = []) {
$_id1Proto = [
"filters" => [

],
"computed" => [

],
"computedNames" => [
"forms"
],
"tagName" => "form"
];
$html = "";
$componentCtx = [
"proto" => $_id1Proto,
"sourceSlots" => $sourceSlots,
"data" => $data ? $data : (object)["formLen" => 3,"forms" => (object)[]],
"owner" => $parentCtx,
"slotRenderers" => []
];
if ($data) {
$componentCtx["data"]->formLen = isset($componentCtx["data"]->formLen) ? $componentCtx["data"]->formLen : 3;
$componentCtx["data"]->forms = isset($componentCtx["data"]->forms) ? $componentCtx["data"]->forms : (object)[];
}
$computedNames = $componentCtx["proto"]["computedNames"];
foreach ($computedNames as $i => $computedName) {
  $data[$computedName] = $componentCtx["proto"]["computed"][$computedName]($componentCtx);
}
$html .= "<form";
if ((isset($componentCtx["data"]->{"class"}) ? $componentCtx["data"]->{"class"} : null)) {
$html .= San::attrFilter('class', San::escapeHTML(San::_classFilter((isset($componentCtx["data"]->{"class"}) ? $componentCtx["data"]->{"class"} : null))));
}
if ((isset($componentCtx["data"]->{"style"}) ? $componentCtx["data"]->{"style"} : null)) {
$html .= San::attrFilter('style', San::escapeHTML(San::_styleFilter((isset($componentCtx["data"]->{"style"}) ? $componentCtx["data"]->{"style"} : null))));
}
if ((isset($componentCtx["data"]->{"id"}) ? $componentCtx["data"]->{"id"} : null)) {
$html .= San::attrFilter('id', San::escapeHTML((isset($componentCtx["data"]->{"id"}) ? $componentCtx["data"]->{"id"} : null)));
}
$html .= ">";
if (!$noDataOutput) {
$html .= "<!--s-data:" . json_encode($componentCtx["data"], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "-->";
}
$_id3 = (isset($componentCtx["data"]->{"cates"}) ? $componentCtx["data"]->{"cates"} : null);
if (is_array($_id3) || is_object($_id3)) {
foreach ($_id3 as $_id2 => $value) {
$componentCtx["data"]->_id2 = $_id2;
$componentCtx["data"]->cate = $value;
$html .= "<fieldset>";
$_id5 = (isset($componentCtx["data"]->{"forms"}->{(isset($componentCtx["data"]->{"cate"}) ? $componentCtx["data"]->{"cate"} : null)}) ? $componentCtx["data"]->{"forms"}->{(isset($componentCtx["data"]->{"cate"}) ? $componentCtx["data"]->{"cate"} : null)} : null);
if (is_array($_id5) || is_object($_id5)) {
foreach ($_id5 as $_id4 => $value) {
$componentCtx["data"]->_id4 = $_id4;
$componentCtx["data"]->item = $value;
$html .= "<label>";
$html .= San::escapeHTML((isset($componentCtx["data"]->{"item"}) ? $componentCtx["data"]->{"item"} : null));
$html .= "</label>";

}
}
$html .= "</fieldset>";

}
}
$html .= "</form>";
return $html;
};
return call_user_func("_id1", $data, $noDataOutput);
}; ?>