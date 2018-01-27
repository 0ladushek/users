
function add_address() {
    var address = $('.address');
    $('.addresses-forms').append(
        '<div class="form-group field-address-' + address.length +'-id">\n' +
        '\n' +
        //        '<input type="hidden" id="address-' + address.length +'-id" class="form-control" name="Address[' + address.length +'][id]" value="39">\n' +
        '\n' +
        '<div class="help-block"></div>\n' +
        // '</div>                <div class="form-group field-address-' + address.length +'-user_id">\n' +
        '\n' +
        // '<input type="hidden" id="address-' + address.length +'-user_id" class="form-control" name="Address[' + address.length +'][user_id]" value="1">\n' +
        '\n' +
        '<div class="help-block"></div>\n' +
        '</div>                <div class="form-group field-address-' + address.length +'-name">\n' +
        '<label class="control-label" for="address-' + address.length +'-name">Name</label>\n' +
        '<input type="text" id="address-' + address.length +'-name" class="form-control" name="Address[' + address.length +'][name]" value="" maxlength="255">\n' +
        '\n' +
        '<div class="help-block"></div>\n' +
        '</div>                <div class="form-group field-address-' + address.length +'-address">\n' +
        '<label class="control-label" for="address-' + address.length +'-address">Address</label>\n' +
        '<input type="text" id="address-' + address.length +'-address" class="form-control" name="Address[' + address.length +'][address]" value="" maxlength="255">\n' +
        '\n' +
        '<div class="help-block"></div>\n' +
        '</div>            </div>')

}