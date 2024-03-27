export default [
  {
    title: 'Apps',
    icon: { icon: 'tabler-layout-grid-add' },
    children: [
      {
        title: 'Ecommerce',
        icon: { icon: 'tabler-shopping-cart-plus' },
        children: [
          {
            title: 'Dashboard',
            to: 'admin-dashboards-ecommerce',
          },
          {
            title: 'Product',
            children: [
              { title: 'List', to: 'admin-apps-ecommerce-product-list' },
              { title: 'Add', to: 'admin-apps-ecommerce-product-add' },
              { title: 'Category', to: 'admin-apps-ecommerce-product-category-list' },
            ],
          },
          {
            title: 'Order',
            children: [
              { title: 'List', to: 'admin-apps-ecommerce-order-list' },
              { title: 'Details', to: { name: 'admin-apps-ecommerce-order-details-id', params: { id: '9042' } } },
            ],
          },
          {
            title: 'Customer',
            children: [
              { title: 'List', to: 'admin-apps-ecommerce-customer-list' },
              { title: 'Details', to: { name: 'admin-apps-ecommerce-customer-details-id', params: { id: 478426 } } },
            ],
          },
          {
            title: 'Manage Review',
            to: 'admin-apps-ecommerce-manage-review',
          },
          {
            title: 'Referrals',
            to: 'admin-apps-ecommerce-referrals',
          },
          {
            title: 'Settings',
            to: 'admin-apps-ecommerce-settings',
          },
        ],
      },
      {
        title: 'Academy',
        icon: { icon: 'tabler-book' },
        children: [
          { title: 'Dashboard', to: 'admin-apps-academy-dashboard' },
          { title: 'My Course', to: 'admin-apps-academy-my-course' },
          { title: 'Course Details', to: 'admin-apps-academy-course-details' },
        ],
      },
      {
        title: 'Logistics',
        icon: { icon: 'tabler-truck' },
        children: [
          { title: 'Dashboard', to: 'admin-apps-logistics-dashboard' },
          { title: 'Fleet', to: 'admin-apps-logistics-fleet' },
        ],
      },
      {
        title: 'Email',
        icon: { icon: 'tabler-mail' },
        to: 'admin-apps-email',
      },
      {
        title: 'Chat',
        icon: { icon: 'tabler-message-circle' },
        to: 'admin-apps-chat',
      },
      {
        title: 'Calendar',
        to: 'admin-apps-calendar',
        icon: { icon: 'tabler-calendar' },
      },
      {
        title: 'Invoice',
        icon: { icon: 'tabler-file-dollar' },
        children: [
          { title: 'List', to: 'admin-apps-invoice-list' },
          { title: 'Preview', to: { name: 'admin-apps-invoice-preview-id', params: { id: '5036' } } },
          { title: 'Edit', to: { name: 'admin-apps-invoice-edit-id', params: { id: '5036' } } },
          { title: 'Add', to: 'admin-apps-invoice-add' },
        ],
      },
      {
        title: 'User',
        icon: { icon: 'tabler-users' },
        children: [
          { title: 'List', to: 'admin-apps-user-list' },
          { title: 'View', to: { name: 'admin-apps-user-view-id', params: { id: 21 } } },
        ],
      },
      {
        title: 'Roles & Permissions',
        icon: { icon: 'tabler-settings' },
        children: [
          { title: 'Roles', to: 'admin-apps-roles' },
          { title: 'Permissions', to: 'admin-apps-permissions' },
        ],
      },
    ],
  },
]
