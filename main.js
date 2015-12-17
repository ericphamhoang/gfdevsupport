/**
 * Created by eric on 17/12/2015.
 */

window.gfdevsupport = {
    viewForm: function (id) {
        window.location.href = "/wp-admin/admin-ajax.php?action=gf&id=" + id;
    },
    admin: {
        commands : "viewEntries",
        viewEntries: function () {
            window.location.href = '/wp-admin/admin.php?page=gf_entries';
        },
        viewNotifications: function(id)
        {
            window.location.href = '/wp-admin/admin.php?page=gf_edit_forms&view=settings&subview=notification&id=' + id;
        }
    }
};