export default [
  { heading: 'UI Elements' },
  {
    title: 'Typography',
    icon: { icon: 'tabler-typography' },
    to: 'admin-pages-typography',
  },
  {
    title: 'Icons',
    icon: { icon: 'tabler-brand-tabler' },
    to: 'admin-pages-icons',
  },
  {
    title: 'Cards',
    icon: { icon: 'tabler-id' },
    children: [
      { title: 'Basic', to: 'admin-pages-cards-card-basic' },
      { title: 'Advance', to: 'admin-pages-cards-card-advance' },
      { title: 'Statistics', to: 'admin-pages-cards-card-statistics' },
      { title: 'Widgets', to: 'admin-pages-cards-card-widgets' },
      { title: 'Actions', to: 'admin-pages-cards-card-actions' },
    ],
  },
  {
    title: 'Components',
    icon: { icon: 'tabler-atom' },
    children: [
      { title: 'Alert', to: 'admin-components-alert' },
      { title: 'Avatar', to: 'admin-components-avatar' },
      { title: 'Badge', to: 'admin-components-badge' },
      { title: 'Button', to: 'admin-components-button' },
      { title: 'Chip', to: 'admin-components-chip' },
      { title: 'Dialog', to: 'admin-components-dialog' },
      { title: 'Expansion Panel', to: 'admin-components-expansion-panel' },
      { title: 'List', to: 'admin-components-list' },
      { title: 'Menu', to: 'admin-components-menu' },
      { title: 'Pagination', to: 'admin-components-pagination' },
      { title: 'Progress Circular', to: 'admin-components-progress-circular' },
      { title: 'Progress Linear', to: 'admin-components-progress-linear' },
      { title: 'Snackbar', to: 'admin-components-snackbar' },
      { title: 'Tabs', to: 'admin-components-tabs' },
      { title: 'Timeline', to: 'admin-components-timeline' },
      { title: 'Tooltip', to: 'admin-components-tooltip' },
    ],
  },
  {
    title: 'Extensions',
    icon: { icon: 'tabler-box' },
    children: [
      { title: 'Tour', to: 'admin-extensions-tour' },
      { title: 'Swiper', to: 'admin-extensions-swiper' },
    ],
  },
]
