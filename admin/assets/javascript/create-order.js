import { switchingTabs } from './function.js';

const create_orderTabs = document.querySelectorAll('.c-order-section');

const button_text = document.querySelector('.create-order-btn');

switchingTabs(
  create_orderTabs,
  button_text,
  'Recent Transaction',
  'Expiring Soon',
  'Add Order',
  'this button is hidden',
  true
);
