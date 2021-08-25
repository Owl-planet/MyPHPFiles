<?php 
$categories = array(
    array('id'=>1,'parent_id'=>0, 'name'=>"Yazılım Geliştirme"),
    array('id'=>2,'parent_id'=>1, 'name'=>"Masaüstü Yazılım Geliştirme"),
    array('id'=>3,'parent_id'=>1, 'name'=>"Mobil Uygulama Geliştirme"),
    array('id'=>4,'parent_id'=>1, 'name'=>"Web Uygulama Geliştirme"),
    array('id'=>5,'parent_id'=>4, 'name'=>"PHP"),
    array('id'=>6,'parent_id'=>2, 'name'=>"C++"),
    array('id'=>7,'parent_id'=>4, 'name'=>"Python"),
    array('id'=>8,'parent_id'=>2, 'name'=>"Java SE"),
    array('id'=>9,'parent_id'=>2, 'name'=>"C#"),
    array('id'=>10,'parent_id'=>3, 'name'=>"Swift"),
    array('id'=>11,'parent_id'=>3, 'name'=>"Java Android"),
);
function buildTree($array, $parentId = 0){
    $tree = array();
    foreach($array as $element){
        if($element['parent_id'] == $parentId){
            $children = buildTree($array, $element['id']);
            if($children){
                $element['children'] = $children;
            }
            $tree[] = $element;
        }
    }
    return $tree;
}
$tree = buildTree($categories);
ini_set('xdebug.var_display_max_depth', '5');
var_dump($tree[0]);
?>