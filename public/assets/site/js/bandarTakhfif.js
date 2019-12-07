function show_tab_profile(e){

   let tb_id= $(e).attr('data-target');
   console.log(tb_id);

    // $('.tab-content').each(function (index) {
    //     $(this).attr('class',"");
    //
    // });
    $(tb_id).toggleClass('active');
}
