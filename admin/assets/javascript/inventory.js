import { switchingTabs, modalContent } from './function.js';

const inventory_tabs = document.querySelectorAll('.inventory-section');
const button_text = document.querySelector('.add-product');

window.addEventListener('load', (event) => {
  switchingTabs(
    inventory_tabs,
    button_text,
    'Product Listed',
    'Account Listing',
    'Add Product',
    'Add Account',
    false,
    inventory_modal_1,
    inventory_modal_2
  );
});

function inventory_modal_1() {
  modalContent('#inventory_1', '.add-product', '.close');
}

function inventory_modal_2() {
  modalContent('#createProductModal', '.add-product', '.close');
}
