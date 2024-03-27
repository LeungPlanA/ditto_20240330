<script setup lang="ts">
const shortcuts = [
  {
    icon: 'tabler-calendar',
    title: 'Calendar',
    subtitle: 'Appointments',
    to: { name: 'admin-apps-calendar' },
  },
  {
    icon: 'tabler-file-dollar',
    title: 'Invoice App',
    subtitle: 'Manage Accounts',
    to: { name: 'admin-apps-invoice-list' },
  },
  {
    icon: 'tabler-user',
    title: 'Users',
    subtitle: 'Manage Users',
    to: { name: 'admin-apps-user-list' },
  },
  {
    icon: 'tabler-users',
    title: 'Role Management',
    subtitle: 'Permission',
    to: { name: 'admin-apps-roles' },
  },
  {
    icon: 'tabler-device-desktop-analytics',
    title: 'Dashboard',
    subtitle: 'Dashboard Analytics',
    to: { name: 'admin-dashboards-analytics' },
  },
  {
    icon: 'tabler-settings',
    title: 'Settings',
    subtitle: 'Account Settings',
    to: { name: 'admin-pages-account-settings-tab', params: { tab: 'account' } },
  },

]
</script>

<template>
  <Shortcuts :shortcuts="shortcuts" />
</template>
