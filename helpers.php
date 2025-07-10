<?php

if (! function_exists('getMerchandisingZoneSlug')) {
    function getMerchandisingZoneSlug($easyask_key, $id = null)
    {
        $where = $id
            ? [['easyask_key', 'LIKE', '%'.$easyask_key.'%'], ['id', '!=', $id]]
            : ['easyask_key' => $easyask_key];

        $count = \Amplify\System\Marketing\Models\MerchandisingZone::query()->where($where)->count();

        return $count
            ? "$easyask_key-$count"
            : $easyask_key;
    }
}
