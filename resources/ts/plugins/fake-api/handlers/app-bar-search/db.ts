import type { SearchResults } from '@db/app-bar-search/types'

interface DB {
  searchItems: SearchResults[]
}

export const db: DB = {
  searchItems: [
    {
      title: 'Dashboards',
      category: 'dashboards',
      children: [
        {
          url: { name: 'admin-dashboards-analytics' },
          icon: 'tabler-timeline',
          title: 'Analytics Dashboard',
        },
        {
          url: { name: 'admin-dashboards-crm' },
          icon: 'tabler-file-analytics',
          title: 'CRM Dashboard',
        },
        {
          url: { name: 'admin-dashboards-ecommerce' },
          icon: 'tabler-shopping-cart',
          title: 'ECommerce Dashboard',
        },
        {
          url: { name: 'admin-dashboards-academy' },
          icon: 'tabler-book',
          title: 'Academy Dashboard',
        },
        {
          url: { name: 'admin-dashboards-logistics' },
          icon: 'tabler-truck',
          title: 'Logistics Dashboard',
        },
      ],
    },
    {
      title: 'Front Pages',
      category: 'frontPages',
      children: [
        {
          url: { name: 'admin-front-pages-landing-page' },
          icon: 'tabler-file-description',
          title: 'Landing Front',
        },
        {
          url: { name: 'admin-front-pages-pricing' },
          icon: 'tabler-file-description',
          title: 'Pricing Front',
        },
        {
          url: { name: 'admin-front-pages-payment' },
          icon: 'tabler-file-description',
          title: 'Payment Front',
        },
        {
          url: { name: 'admin-front-pages-checkout' },
          icon: 'tabler-file-description',
          title: 'Checkout Front',
        },
        {
          url: { name: 'admin-front-pages-help-center' },
          icon: 'tabler-file-description',
          title: 'Help Center Front',
        },
      ],
    },
    {
      title: 'Apps & Pages',
      category: 'appsPages',
      children: [
        {
          url: { name: 'admin-apps-email' },
          icon: 'tabler-mail',
          title: 'Email',
        },
        {
          url: { name: 'admin-apps-chat' },
          icon: 'tabler-message',
          title: 'Chat',
        },
        {
          url: { name: 'admin-apps-calendar' },
          icon: 'tabler-calendar',
          title: 'Calendar',
        },
        {
          url: { name: 'admin-apps-ecommerce-dashboard' },
          icon: 'tabler-shopping-cart',
          title: 'ECommerce Dashboard',
        },
        {
          url: { name: 'admin-apps-ecommerce-product-list' },
          icon: 'tabler-list',
          title: 'Ecommerce - Product List',
        },
        {
          url: { name: 'admin-apps-ecommerce-product-add' },
          icon: 'tabler-circle-plus',
          title: 'Ecommerce - Add Product',
        },
        {
          url: { name: 'admin-apps-ecommerce-product-category-list' },
          icon: 'tabler-list',
          title: 'Ecommerce - Category List',
        },
        {
          url: { name: 'admin-apps-ecommerce-order-list' },
          icon: 'tabler-list',
          title: 'Ecommerce - Order List',
        },
        {
          url: { name: 'admin-apps-ecommerce-order-details-id', params: { id: '9042' } },
          icon: 'tabler-list-check',
          title: 'Ecommerce - Order Details',
        },
        {
          url: { name: 'admin-apps-ecommerce-customer-list' },
          icon: 'tabler-user',
          title: 'Ecommerce - Customer List',
        },
        {
          url: { name: 'admin-apps-ecommerce-customer-details-id', params: { id: '478426', tab: 'security' } },
          icon: 'tabler-list',
          title: 'Ecommerce - Customer Details',
        },
        {
          url: { name: 'admin-apps-ecommerce-manage-review' },
          icon: 'tabler-quote',
          title: 'Ecommerce - Manage Review',
        },
        {
          url: { name: 'admin-apps-ecommerce-referrals' },
          icon: 'tabler-users-group',
          title: 'Ecommerce - Referrals',
        },
        {
          url: { name: 'admin-apps-ecommerce-settings' },
          icon: 'tabler-settings',
          title: 'Ecommerce - Settings',
        },
        {
          url: { name: 'admin-apps-academy-dashboard' },
          icon: 'tabler-book',
          title: 'Academy - Dashboard',
        },
        {
          url: { name: 'admin-apps-academy-my-course' },
          icon: 'tabler-list',
          title: 'Academy - My Courses',
        },
        {
          url: { name: 'admin-apps-academy-course-details' },
          icon: 'tabler-list',
          title: 'Academy - Course Details',
        },
        {
          url: { name: 'admin-apps-logistics-dashboard' },
          icon: 'tabler-book',
          title: 'Logistics - Dashboard',
        },
        {
          url: { name: 'admin-apps-logistics-fleet' },
          icon: 'tabler-car',
          title: 'Logistics - fleet',
        },
        {
          url: { name: 'admin-apps-invoice-list' },
          icon: 'tabler-list',
          title: 'Invoice List',
        },
        {
          url: { name: 'admin-apps-invoice-preview-id', params: { id: '5036' } },
          icon: 'tabler-file-description',
          title: 'Invoice Preview',
        },
        {
          url: { name: 'admin-apps-invoice-edit-id', params: { id: '5036' } },
          icon: 'tabler-file-pencil',
          title: 'Invoice Edit',
        },
        {
          url: { name: 'admin-apps-invoice-add' },
          icon: 'tabler-file-plus',
          title: 'Invoice Add',
        },
        {
          url: { name: 'admin-apps-user-list' },
          icon: 'tabler-users-group',
          title: 'User List',
        },
        {
          url: { name: 'admin-apps-user-view-id', params: { id: 21 } },
          icon: 'tabler-eye',
          title: 'User View',
        },
        {
          url: { name: 'admin-pages-user-profile-tab', params: { tab: 'profile' } },
          icon: 'tabler-user-circle',
          title: 'User Profilesss - Profile',
        },
        {
          url: { name: 'admin-pages-account-settings-tab', params: { tab: 'account' } },
          icon: 'tabler-user-circle',
          title: 'Account Settings - Account',
        },
        {
          url: { name: 'admin-pages-account-settings-tab', params: { tab: 'security' } },
          icon: 'tabler-lock-open',
          title: 'Account Settings - Security',
        },
        {
          url: { name: 'admin-pages-account-settings-tab', params: { tab: 'billing-plans' } },
          icon: 'tabler-currency-dollar',
          title: 'Account Settings - Billing',
        },
        {
          url: { name: 'admin-pages-account-settings-tab', params: { tab: 'notification' } },
          icon: 'tabler-bell',
          title: 'Account Settings - Notifications',
        },
        {
          url: { name: 'admin-pages-account-settings-tab', params: { tab: 'connection' } },
          icon: 'tabler-link',
          title: 'Account Settings - Connections',
        },
        {
          url: { name: 'admin-pages-pricing' },
          icon: 'tabler-currency-dollar',
          title: 'Pricing',
        },
        {
          url: { name: 'admin-pages-faq' },
          icon: 'tabler-help-circle',
          title: 'FAQ',
        },
        {
          url: { name: 'admin-pages-misc-coming-soon' },
          icon: 'tabler-clock',
          title: 'Coming Soon',
        },
        {
          url: { name: 'admin-pages-misc-under-maintenance' },
          icon: 'tabler-settings',
          title: 'Under Maintenance',
        },
        {
          url: { path: '/pages/misc/page-not-found' },
          icon: 'tabler-alert-circle',
          title: 'Page Not Found - 404',
        },
        {
          url: { path: '/pages/misc/not-authorized' },
          icon: 'tabler-user-x',
          title: 'Not Authorized - 401',
        },
        {
          url: { name: 'admin-pages-authentication-login-v1' },
          icon: 'tabler-login',
          title: 'Login V1',
        },
        {
          url: { name: 'admin-pages-authentication-login-v2' },
          icon: 'tabler-login',
          title: 'Login V2',
        },
        {
          url: { name: 'admin-pages-authentication-register-v1' },
          icon: 'tabler-user-plus',
          title: 'Register V1',
        },
        {
          url: { name: 'admin-pages-authentication-register-v2' },
          icon: 'tabler-user-plus',
          title: 'Register V2',
        },
        {
          icon: 'tabler-mail',
          title: 'Verify Email V1',
          url: { name: 'admin-pages-authentication-verify-email-v1' },
        },
        {
          icon: 'tabler-mail',
          title: 'Verify Email V2',
          url: { name: 'admin-pages-authentication-verify-email-v2' },
        },
        {
          url: { name: 'admin-pages-authentication-forgot-password-v1' },
          icon: 'tabler-lock-exclamation',
          title: 'Forgot Password V1',
        },
        {
          url: { name: 'admin-pages-authentication-forgot-password-v2' },
          icon: 'tabler-lock-exclamation',
          title: 'Forgot Password V2',
        },
        {
          url: { name: 'admin-pages-authentication-reset-password-v1' },
          icon: 'tabler-help-circle',
          title: 'Reset Password V1',
        },
        {
          url: { name: 'admin-pages-authentication-reset-password-v2' },
          icon: 'tabler-help-circle',
          title: 'Reset Password V2',
        },
        {
          icon: 'tabler-devices',
          title: 'Two Steps V1',
          url: { name: 'admin-pages-authentication-two-steps-v1' },
        },
        {
          icon: 'tabler-devices',
          title: 'Two Steps V2',
          url: { name: 'admin-pages-authentication-two-steps-v2' },
        },
        {
          url: { name: 'admin-pages-dialog-examples' },
          icon: 'tabler-square',
          title: 'Dialog Examples',
        },
        {
          url: { name: 'admin-pages-authentication-register-multi-steps' },
          icon: 'tabler-user-plus',
          title: 'Register Multi-Steps',
        },
        {
          url: { name: 'admin-wizard-examples-checkout' },
          icon: 'tabler-shopping-cart',
          title: 'Wizard - Checkout',
        },
        {
          url: { name: 'admin-wizard-examples-create-deal' },
          icon: 'tabler-gift',
          title: 'Wizard - create deal',
        },
        {
          url: { name: 'admin-pageswizard-examples-property-listing' },
          icon: 'tabler-home',
          title: 'Wizard - Property Listing',
        },
        {
          url: { name: 'admin-pagesadmin-apps-roles' },
          icon: 'tabler-shield-checkered',
          title: 'Roles',
        },
        {
          url: { name: 'admin-pagesadmin-apps-permissions' },
          icon: 'tabler-shield-checkered',
          title: 'Permissions',
        },
      ],
    },
    {
      title: 'User Interface',
      category: 'userInterface',
      children: [
        {
          url: { name: 'admin-pagesadmin-pages-typography' },
          icon: 'tabler-letter-case',
          title: 'Typography',
        },
        {
          url: { name: 'admin-pagesadmin-pages-icons' },
          icon: 'tabler-icons',
          title: 'Icons',
        },
        {
          url: { name: 'admin-pagesadmin-pages-cards-card-basic' },
          icon: 'tabler-id',
          title: 'Card Basic',
        },
        {
          url: { name: 'admin-pagesadmin-pages-cards-card-advance' },
          icon: 'tabler-square-plus',
          title: 'Card Advance',
        },
        {
          url: { name: 'admin-pagesadmin-pages-cards-card-statistics' },
          icon: 'tabler-chart-bar',
          title: 'Card Statistics',
        },
        {
          url: { name: 'admin-pagesadmin-pages-cards-card-widgets' },
          icon: 'tabler-chart-bar',
          title: 'Card widgets',
        },
        {
          url: { name: 'admin-pagesadmin-pages-cards-card-actions' },
          icon: 'tabler-square-plus',
          title: 'Card Actions',
        },
        {
          url: { name: 'admin-pagesadmin-components-alert' },
          icon: 'tabler-alert-triangle',
          title: 'Alerts',
        },
        {
          url: { name: 'admin-pagesadmin-components-avatar' },
          icon: 'tabler-user-circle',
          title: 'Avatars',
        },
        {
          url: { name: 'admin-pagesadmin-components-badge' },
          icon: 'tabler-badge',
          title: 'Badges',
        },
        {
          url: { name: 'admin-pagesadmin-components-button' },
          icon: 'tabler-circle-plus',
          title: 'Buttons',
        },
        {
          url: { name: 'admin-pagesadmin-components-chip' },
          icon: 'tabler-square',
          title: 'Chips',
        },
        {
          url: { name: 'admin-components-dialog' },
          icon: 'tabler-square',
          title: 'Dialogs',
        },
        {
          url: { name: 'admin-components-list' },
          icon: 'tabler-list',
          title: 'List',
        },
        {
          url: { name: 'admin-components-menu' },
          icon: 'tabler-menu-2',
          title: 'Menu',
        },
        {
          url: { name: 'admin-components-pagination' },
          icon: 'tabler-skip-forward',
          title: 'Pagination',
        },
        {
          url: { name: 'admin-components-progress-circular' },
          icon: 'tabler-progress',
          title: 'Progress Circular',
        },
        {
          url: { name: 'admin-components-progress-linear' },
          icon: 'tabler-progress',
          title: 'Progress Linear',
        },
        {
          url: { name: 'admin-components-expansion-panel' },
          icon: 'tabler-align-center',
          title: 'Expansion Panel',
        },
        {
          url: { name: 'admin-components-snackbar' },
          icon: 'tabler-message-dots',
          title: 'Snackbar',
        },
        {
          url: { name: 'admin-components-tabs' },
          icon: 'tabler-app-window',
          title: 'Tabs',
        },
        {
          url: { name: 'admin-components-timeline' },
          icon: 'tabler-timeline',
          title: 'Timeline',
        },
        {
          url: { name: 'admin-components-tooltip' },
          icon: 'tabler-message-2',
          title: 'Tooltip',
        },
        {
          url: { name: 'admin-extensions-tour' },
          icon: 'tabler-box',
          title: 'Tour',
        },
        {
          url: { name: 'admin-extensions-swiper' },
          icon: 'tabler-photo',
          title: 'Swiper',
        },
      ],
    },
    {
      title: 'Forms & Tables',
      category: 'formsTables',
      children: [
        {
          url: { name: 'admin-forms-textfield' },
          icon: 'tabler-text-caption',
          title: 'TextField',
        },
        {
          url: { name: 'admin-forms-select' },
          icon: 'tabler-list-check',
          title: 'Select',
        },
        {
          url: { name: 'admin-forms-checkbox' },
          icon: 'tabler-square-check',
          title: 'Checkbox',
        },
        {
          url: { name: 'admin-forms-radio' },
          icon: 'tabler-circle-dot',
          title: 'Radio',
        },
        {
          url: { name: 'admin-forms-combobox' },
          icon: 'tabler-square-check',
          title: 'Combobox',
        },
        {
          url: { name: 'admin-forms-date-time-picker' },
          icon: 'tabler-calendar',
          title: 'Date Time picker',
        },
        {
          url: { name: 'admin-forms-textarea' },
          icon: 'tabler-notes',
          title: 'Textarea',
        },
        {
          url: { name: 'admin-forms-switch' },
          icon: 'tabler-toggle-right',
          title: 'Switch',
        },
        {
          url: { name: 'admin-forms-file-input' },
          icon: 'tabler-upload',
          title: 'File Input',
        },
        {
          url: { name: 'admin-forms-editors' },
          icon: 'tabler-file-pencil',
          title: 'Editors',
        },
        {
          url: { name: 'admin-forms-rating' },
          icon: 'tabler-star',
          title: 'Form Rating',
        },
        {
          url: { name: 'admin-forms-slider' },
          icon: 'tabler-hand-move',
          title: 'Slider',
        },
        {
          url: { name: 'admin-forms-range-slider' },
          icon: 'tabler-adjustments-horizontal',
          title: 'Range Slider',
        },
        {
          url: { name: 'admin-forms-form-layouts' },
          icon: 'tabler-box',
          title: 'Form Layouts',
        },
        {
          url: { name: 'admin-forms-form-validation' },
          icon: 'tabler-circle-check',
          title: 'Form Validation',
        },
        {
          url: { name: 'admin-forms-custom-input' },
          icon: 'tabler-list-details',
          title: 'Custom Input',
        },
        {
          url: { name: 'admin-forms-autocomplete' },
          icon: 'tabler-align-left',
          title: 'Autocomplete',
        },
        {
          url: { name: 'admin-tables-data-table' },
          icon: 'tabler-table',
          title: 'Data Table',
        },
        {
          url: { name: 'admin-tables-simple-table' },
          icon: 'tabler-table',
          title: 'Simple Table',
        },
        {
          url: { name: 'admin-forms-form-wizard-numbered' },
          icon: 'tabler-align-center',
          title: 'Form Wizard Numbered',
        },
        {
          url: { name: 'admin-forms-form-wizard-icons' },
          icon: 'tabler-align-center',
          title: 'Form Wizard Icons',
        },
      ],
    },
    {
      title: 'Chart & Misc',
      category: 'chartsMisc',
      children: [
        {
          url: { name: 'admin-charts-apex-chart' },
          icon: 'tabler-chart-area-line',
          title: 'Apex Charts',
        },
        {
          url: { name: 'admin-charts-chartjs' },
          icon: 'tabler-chart-histogram',
          title: 'ChartJS',
        },
        {
          url: { name: 'admin-access-control' },
          icon: 'tabler-shield',
          title: 'Access Control (ACL)',
        },
      ],
    },
  ],
}
