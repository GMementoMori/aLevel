define(
    [
        'jquery',
        'Magento_Ui/js/modal/modal'
    ],
    function($) {
        "use strict";
        //creating jquery widget
        $.widget('Vendor.modalForm', {
            options: {
                modalForm: '#modal-form',
                modalButton: '.open-modal-form'
            },
            _create: function() {
                this.options.modalOption = this._getModalOptions();
                this._bind();
            },
            _getModalOptions: function() {
                var name = '';
                var phone = '';
                var email = '';
                var sku = '';
                var record = {};

                var options = {
                    type: 'popup',
                    responsive: true,
                    title: 'Quick Order',
                    buttons: [{
                        text: $.mage.__('Continue'),
                        class: '',
                        click: function () {
                              name = $("#name_quick_order").val();
                              phone = $("#phone_quick_order").val();
                              email = $("#email_quick_order").val();
                              sku = $("#product_addtocart_form").attr("data-product-sku");

                              record = {name,phone,email,sku};
                          $.ajax({
                              url: 'quickorder/record/add',
                              data: record,
                              type: "POST",
                              dataType: 'json'
                          });
                          this.closeModal();
                        }
                    }]
                };

                return options;
            },
            _bind: function(){
                var modalOption = this.options.modalOption;
                var modalForm = this.options.modalForm;

                $(document).on('click', this.options.modalButton,  function(){
                    //Initialize modal
                    $(modalForm).modal(modalOption);
                    //open modal
                    $(modalForm).trigger('openModal');
                });
            }
        });

        return $.Vendor.modalForm;
    }
);
