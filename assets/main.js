import 'vite/modulepreload-polyfill'
import './scripts/loadCustomElements'
import Alpine from 'alpinejs'
import FlyntComponent from './scripts/FlyntComponent'

import 'lazysizes'

if (import.meta.env.DEV) {
  import('@vite/client')
}

window.customElements.define(
  'flynt-component',
  FlyntComponent
)

window.Alpine = Alpine
Alpine.start()

import.meta.glob([
  '../Components/**',
  '../assets/**',
  '!**/*.js',
  '!**/*.scss',
  '!**/*.php',
  '!**/*.twig',
  '!**/screenshot.png',
  '!**/*.md'
])
