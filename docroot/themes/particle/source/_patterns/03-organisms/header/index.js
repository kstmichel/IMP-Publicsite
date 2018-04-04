/**
 * Header
 */

// Custom
import 'protons';

// Module template
import 'atoms/branding/_branding.twig';
import 'organisms/navbar/_navbar.twig';
import './_header.twig';

// Import custom sass, includes Bootstrap sass
import './_header.scss';

export const name = 'header';

export function disable() {}

export function enable() {}

export default enable;
