import { switchingTabs } from './function.js';

const finance = document.querySelectorAll('.finance');
const button_text = document.querySelector('.add-product');

switchingTabs(
  finance,
  button_text,
  'Financial Ledger',
  'Transaction Summary',
  'Add Capital',
  'Add Expenses',
  false
);
