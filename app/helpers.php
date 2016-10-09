<?php

if (!function_exists('classActivePath')) {
    function classActivePath($path)
    {
        return Request::is($path) ? ' class="active"' : '';
    }
}

if (!function_exists('classActiveSegment')) {
    function classActiveSegment($segment, $value)
    {
        if (!is_array($value)) {
            return Request::segment($segment) == $value ? ' class="active"' : '';
        }
        foreach ($value as $v) {
            if (Request::segment($segment) == $v) {
                return ' class="active"';
            }
        }
        return '';
    }
}

if (!function_exists('classActiveOnlyPath')) {
    function classActiveOnlyPath($path)
    {
        return Request::is($path) ? ' active' : '';
    }
}

if (!function_exists('classActiveOnlySegment')) {
    function classActiveOnlySegment($segment, $value)
    {
        if (!is_array($value)) {
            return Request::segment($segment) == $value ? ' active' : '';
        }
        foreach ($value as $v) {
            if (Request::segment($segment) == $v) {
                return ' active';
            }
        }
        return '';
    }
}

if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        return \Carbon\Carbon::parse($date)->format(config('app.locale') != 'en' ? 'd/m/Y H:i:s' : 'm/d/Y H:i:s');
    }
}

if (!function_exists('languageTransform')) {
    function languageTransform($model, $attributeName)
    {
        if(Session::has('locale')  && Session::get('locale') == 'en'){
            $attributeName = 'e_'.$attributeName;
        }
        return $model->$attributeName;
    }
}

if (!function_exists('getCategorySlugLink')) {
    function getCategorySlugLink($menuName, $category)
    {
        $title_link = languageTransform($category, 'title');
        $menu_link = trans('front/site.'. $menuName);
        return $link_to_service = '/' . $menu_link . '/' . str_slug($title_link) .'-p' . strval($category->id);
    }
}

if (!function_exists('getItemSlugLink')) {
    function getItemSlugLink($menuName, $item)
    {
        $title_link = languageTransform($item, 'title');
        $menu_link = trans('front/site.'. $menuName);
        return $link_to_service = '/' . $menu_link . '/' . str_slug($title_link) .'-i' . strval($item->id);
    }
}

if (!function_exists('getPaginateByPidData')) {
    function getPaginateByPidData($pName, $pListData, $repository, $pageSize, $requestHasPid = null )
    {
        $pid = null;
        if($requestHasPid){
            $pid = $requestHasPid->input('pId');
        }
        else {            
            $pid = $pListData[0]->id;                 
        }
        $paginateData = $repository->paginateByPid($pid, $pageSize);
        $customUrl = url(getCategorySlugLink($pName, $pListData[0]));
        $paginateData->setPath($customUrl);
        return $paginateData;    
    }
}





