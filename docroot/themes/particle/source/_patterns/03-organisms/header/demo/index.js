/**
 * Demo of footer. Pulls in footer assets, and provides demo-only assets.
 *
 * This file is NOT imported by design-system.js, but is included as part of apps/pl/index.js
 */

// Import component assets
import 'organisms/header';

// Import demo assets
import twig from './headers.twig';
import yaml from './headers.yml';
import markdown from './header.md';

export default {
  twig,
  yaml,
  markdown,
};
