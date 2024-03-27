export default [
  {
    title: 'Dashboards',
    icon: { icon: 'tabler-smart-home' },
    children: [
      {
        title: 'Analytics',
        to: 'admin-dashboards-analytics',
      },
      {
        title: 'CRM',
        to: 'admin-dashboards-crm',
      },
      {
        title: 'Ecommerce',
        to: 'admin-dashboards-ecommerce',
      },
      {
        title: 'Academy',
        to: 'admin-apps-academy-dashboard',
      },
      {
        title: 'Logistics',
        to: 'admin-apps-logistics-dashboard',
      },
    ],
    badgeContent: '5',
    badgeClass: 'bg-error',
  },
  {
    title: 'Front Pages',
    icon: { icon: 'tabler-files' },
    children: [
      {
        title: 'Landing',
        to: 'admin-front-pages-landing-page',
        target: '_blank',
      },
      {
        title: 'Pricing',
        to: 'admin-front-pages-pricing',
        target: '_blank',
      },
      {
        title: 'Payment',
        to: 'admin-front-pages-payment',
        target: '_blank',
      },
      {
        title: 'Checkout',
        to: 'admin-front-pages-checkout',
        target: '_blank',
      },
      {
        title: 'Help Center',
        to: 'admin-front-pages-help-center',
        target: '_blank',
      },
    ],
  },
]
