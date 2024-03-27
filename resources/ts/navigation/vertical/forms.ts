export default [
  { heading: 'Forms & Tables' },
  {
    title: 'Form Elements',
    icon: { icon: 'tabler-checkbox' },
    children: [
      { title: 'Autocomplete', to: 'admin-forms-autocomplete' },
      { title: 'Checkbox', to: 'admin-forms-checkbox' },
      { title: 'Combobox', to: 'admin-forms-combobox' },
      { title: 'Date Time Picker', to: 'admin-forms-date-time-picker' },
      { title: 'Editors', to: 'admin-forms-editors' },
      { title: 'File Input', to: 'admin-forms-file-input' },
      { title: 'Radio', to: 'admin-forms-radio' },
      { title: 'Custom Input', to: 'admin-forms-custom-input' },
      { title: 'Range Slider', to: 'admin-forms-range-slider' },
      { title: 'Rating', to: 'admin-forms-rating' },
      { title: 'Select', to: 'admin-forms-select' },
      { title: 'Slider', to: 'admin-forms-slider' },
      { title: 'Switch', to: 'admin-forms-switch' },
      { title: 'Textarea', to: 'admin-forms-textarea' },
      { title: 'Textfield', to: 'admin-forms-textfield' },
    ],
  },
  {
    title: 'Form Layouts',
    icon: { icon: 'tabler-layout' },
    to: 'admin-forms-form-layouts',
  },
  {
    title: 'Form Wizard',
    icon: { icon: 'tabler-git-merge' },
    children: [
      { title: 'Numbered', to: 'admin-forms-form-wizard-numbered' },
      { title: 'Icons', to: 'admin-forms-form-wizard-icons' },
    ],
  },
  {
    title: 'Form Validation',
    icon: { icon: 'tabler-checkup-list' },
    to: 'admin-forms-form-validation',
  },
  {
    title: 'Tables',
    icon: { icon: 'tabler-table' },
    children: [
      { title: 'Simple Table', to: 'admin-tables-simple-table' },
      { title: 'Data Table', to: 'admin-tables-data-table' },
    ],
  },
]
