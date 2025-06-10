import { switchingTabs } from './function.js';
const inventory_tabs = document.querySelectorAll('.inventory-section');
const button_text = document.querySelector('.add-product');

switchingTabs(
  inventory_tabs,
  button_text,
  'Product Listed',
  'Account Listing',
  'Add Product',
  'Add Account',
  false
);
