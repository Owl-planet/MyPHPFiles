<?php 
function viewStaffList(...$staffArr){
    if(empty($staffArr))
        return 'Personel bilgisi bulunamadı.';
    
        $staffListView = '<br><br><b>Yazılım geliştirme ekibi</b><hr><br>';
        foreach($staffArr as $key => $value)
            $staffListView.=($key+1).' : '.$value.'<br>';
        
        $firstStaff = $staffArr[0];
        $staffListView.="<hr><b>Takım lideri : </b>".$firstStaff;
        return $staffListView;
}

echo viewStaffList('Mehmet Ali uysal', 'The Onur', 'Hasan mert');
$arr = ['Mehmet Ali uysal', 'The Onur', 'Hasan mert'];
echo viewStaffList(...$arr);
?>