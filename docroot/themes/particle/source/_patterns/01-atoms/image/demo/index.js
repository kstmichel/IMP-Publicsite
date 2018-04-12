/**
 * Demo of Image. Pull in image assets, but provide demo-only assets.
 */

// Ensure all image pattern deps are present
import 'atoms/image';

// Demo-only asset: astrogoat.png
import './astrogoat.png';
import './ncg_logo.png';
import './banner_background.jpg';
import './banner_features.jpg';
import './thumb-square-yosemite.jpg';
import './landscape-16x9-mountains.jpg';
import './thumb-square-fire.jpg';
import './IMP_logo.png';
import './features_incidentManagement.png';
import './features_empower_team.png';
import './features_drive_consistency.png';
import './features_lessons_learned.png';
import './features_manage_team.png';
import './features_dashboard.png';
import './features_monthly.png';
import './features_communicate.png';
import './banner_works.jpg';
import './banner_support.jpg';
import './banner_pricing.jpg';
import './splash.jpg';


import imageImgMarkdown from './image-img.md';
import imageImgTwig from './image-img.twig';
import imageInlineTwig from './image-inline.twig';
import imageStylesTwig from './image-styles.twig';

export default {
  imageImgMarkdown,
  imageImgTwig,
  imageInlineTwig,
  imageStylesTwig,
};
