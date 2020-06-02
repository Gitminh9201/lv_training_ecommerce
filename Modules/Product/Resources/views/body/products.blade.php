<?php  
    $i=0;
?>
@foreach($list as $cate)
    <?php 
        $i++;
    ?>
    <tr class="tr-shadow">
        <td>{{$i}}</td>
        <td>{{$cate['title']}}</td>
        <td class="text-right">{{$cate['price']}}</td>
        <td class="text-right">{{$cate['price_compare']}}</td>
        <td class="text-right"> 
            @foreach ($categories as $category)
                @if ($category['id'] == $cate['category_id'])
                    {{$category['title']}}
                @endif    
            @endforeach
        </td>
        <td class="text-right"> 
            @foreach ($groups as $item)
                @if ($item['id'] == $cate['group_id'])
                    {{$item['title']}}
                @endif    
            @endforeach
        </td>
        <td class="text-right">{{$cate['updated_at']}}</td>
        <td>
            <div class="table-data-feature">
            <button class="item" title="Edit" data-toggle="modal" data-target="#modal" id="btn-edit" 
            onclick="showDialogUpdate({{$cate['id']}})">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                <button class="item" title="Delete" onclick="remove({{$cate['id']}})">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                <button class="item" title="More">
                    <i class="zmdi zmdi-more"></i>
                </button>
            </div>
        </td>
    </tr>
    <tr class="spacer"></tr>
@endforeach