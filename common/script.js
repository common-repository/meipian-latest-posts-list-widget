/**
 * Created by helin16 on 9/2/17.
 */
function sysbox_latest_mei_pian_post_list_widget_getListDom(items) {
    var tmp = {};
    tmp.return = jQuery('<div class="mei-pian-post-item-list-wrapper"></div>');
    jQuery.each(items, function (index, item) {
        tmp.return.append(
            jQuery('<a class="mei-pian-post-item" href="' + item.href + '" target="_blank"></a>').append(
                jQuery('<div class="img-thumb" style="background: transparent url(' + item.imageUrl.thumb + ') no-repeat center center;"></div><h3 class="title">' + item.title + '</h3><div class="description">' + item.description + '</div>')
            )
        );
    });
    return tmp.return;
}