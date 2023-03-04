jQuery(document).ready(function(){
    jQuery(document).on("click",'.cat-add',function(){
        var name = jQuery(".cat-name").val();
        var des = jQuery(".cat-des").val();
        var status = jQuery(".cat-status").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/addcategory',
            type:'POST',
            data:{
                name:name,
                des:des,
                status:status
            },
            success:function(res){
                alert(res.msg);
                jQuery('#add').modal("hide");
                show();
            }
        })
       
    })
    jQuery(document).on("click",'.btn-active',function(){
        var id= jQuery(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/activecategory',
            type:'POST',
            data:{
                id:id
            },
            success:function(res){
                alert(res.msg);
                show();
            }
        });
    });
    jQuery(document).on("click",'.btn-inactive',function(){
        var id= jQuery(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/inactivecategory',
            type:'POST',
            data:{
                id:id
            },
            success:function(res){
                alert(res.msg);
                show();
            }
        });
    });
    jQuery(document).on("click",".btn-delete",function(){
        var id = jQuery(this).val();
        jQuery('#DeleteModal').modal('show');
        jQuery('.btn-confirm-delete').val(id);
      });
     jQuery(document).on("click",".btn-confirm-delete",function(){
        var id = jQuery(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/deletecategory',
            type:'POST',
            data:{
                id:id
            },
            success:function(res){
                alert(res.msg);
                jQuery('#DeleteModal').modal('hide');
                show();
            }
        });
     });

     jQuery(document).on("click",".btn-edit",function(){
        var id= jQuery(this).val();
        jQuery('#UpdateModal').modal('show');
        jQuery('.btn-update').val(id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery.ajax({
          url:"/getcategory",
          type:'GET',
          dataType:"JSON",
          data:{
            id:id,
          },
          success:function(res){
            var data = res.allData;
            jQuery('.cat-up-name').val(data.name);
            jQuery('.cat-up-des').val(data.des);
            jQuery('.cat-up-status').val(data.status);
          }
        })
      });

      jQuery(document).on("click",".btn-update",function(){
        var id= jQuery(this).val();
        var name = jQuery(".cat-up-name").val();
        var des = jQuery(".cat-up-des").val();
        var status = jQuery(".cat-up-status").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/updatecategory',
            type:'POST',
            data:{
                id:id,
                name:name,
                des:des,
                status:status
            },
            success:function(res){
                alert(res.msg);
                jQuery('#UpdateModal').modal("hide");
                show();
            }
        })
      });
    show();
    function show(){
        $.ajax({
            url:'/showcategory',
            type:'GET',
            dataType:"JSON",
            success:function(res){
                if(res.status == '200'){
                    var allData = "";
                    var myStatus = "";
                    jQuery.each(res.allData,function(key,val){
                        if(val.status=='1'){
                            myStatus = '<button class="btn-active btn btn-success btn-sm" value='+val.id+'>Active</button>'
                        }
                        else{
                            myStatus= '<button class="btn-inactive btn btn-warning btn-sm" value='+val.id+'>Inactive</button>'
                        }
                        allData += '<tr>\
                        <td>'+key+'</td>\
                        <td>'+val.name+'</td>\
                        <td>'+val.des+'</td>\
                        <td>'+myStatus+'</td>\
                        <td><button class="btn-edit btn btn-info btn-sm" value='+val.id+'>Edit</button>\
                        <button class="btn-delete btn btn-danger btn-sm" value='+val.id+'>Delete</button></td>\
                     </tr>'
                    });
                    jQuery(".tData").html(allData);
                }
            }
        })
    }
})