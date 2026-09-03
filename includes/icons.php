<?php
/**
 * Summarise Corporate — inline SVG icon helper.
 *
 * Feather-icons style: 24×24, stroke-only, currentColor.
 * Bundled inline so we never depend on a CDN.
 *
 *   echo icon('shield');
 *   echo icon('chart-line', 'icon-inline');
 *   echo icon('briefcase', 'w-6 h-6');
 */

if (!function_exists('icon')) {
  function icon($name, $extra_class = '', $size = 24) {
    $paths = [
      'chart-line'  => '<polyline points="3 17 9 11 13 15 21 7"/><polyline points="14 7 21 7 21 14"/>',
      'shield'      => '<path d="M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z"/>',
      'compass'     => '<circle cx="12" cy="12" r="9"/><polygon points="15 9 13.5 13.5 9 15 10.5 10.5 15 9"/>',
      'briefcase'   => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="3" y1="12" x2="21" y2="12"/>',
      'star'        => '<polygon points="12 2 15 9 22 10 17 15 18.5 22 12 18.5 5.5 22 7 15 2 10 9 9 12 2"/>',
      'gem'         => '<polygon points="6 3 18 3 22 9 12 22 2 9 6 3"/><polyline points="6 3 12 9 18 3"/><line x1="12" y1="9" x2="12" y2="22"/>',
      'seedling'    => '<path d="M12 22V10"/><path d="M12 10c0-3-3-6-7-6 0 4 3 7 7 7"/><path d="M12 10c0-3 3-6 7-6 0 4-3 7-7 7"/>',
      'users'       => '<circle cx="9" cy="8" r="3"/><path d="M2 20c0-3 3-5 7-5s7 2 7 5"/><circle cx="17" cy="7" r="2.5"/><path d="M15 20c.4-2.5 2.4-4 5-4"/>',
      'user-tie'    => '<circle cx="12" cy="8" r="3"/><path d="M6 20c0-3 3-5 6-5s6 2 6 5"/><path d="M10 14l2 3 2-3"/>',
      'building'    => '<rect x="4" y="3" width="16" height="18" rx="1"/><line x1="9" y1="7"  x2="9"  y2="7.01"/><line x1="15" y1="7"  x2="15" y2="7.01"/><line x1="9" y1="11" x2="9"  y2="11.01"/><line x1="15" y1="11" x2="15" y2="11.01"/><line x1="9" y1="15" x2="9"  y2="15.01"/><line x1="15" y1="15" x2="15" y2="15.01"/>',
      'target'      => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="currentColor" stroke="none"/>',
      'trending-up' => '<polyline points="3 17 9 11 13 15 21 7"/><polyline points="14 7 21 7 21 14"/>',
      'layers'      => '<polygon points="12 2 22 8 12 14 2 8 12 2"/><polyline points="2 14 12 20 22 14"/>',
      'coins'       => '<circle cx="8" cy="8" r="6"/><path d="M12.5 16.5A6 6 0 0 0 22 14a6 6 0 0 0-9.5-4.9"/>',
      'sparkle'     => '<path d="M12 2v6"/><path d="M12 16v6"/><path d="M2 12h6"/><path d="M16 12h6"/><path d="M5 5l4 4"/><path d="M15 15l4 4"/><path d="M19 5l-4 4"/><path d="M9 15l-4 4"/>',
      'check'       => '<polyline points="4 12 10 18 20 6"/>',
      'check-circle'=> '<circle cx="12" cy="12" r="9"/><polyline points="8 12 11 15 16 9"/>',
      'arrow-right' => '<line x1="4" y1="12" x2="20" y2="12"/><polyline points="14 6 20 12 14 18"/>',
      'phone'       => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.6a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.5c.8.3 1.7.5 2.6.6a2 2 0 0 1 1.7 2z"/>',
      'mail'        => '<rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="2 6 12 13 22 6"/>',
      'map-pin'     => '<path d="M12 22s-8-7-8-13a8 8 0 0 1 16 0c0 6-8 13-8 13z"/><circle cx="12" cy="9" r="3"/>',
      'calendar'    => '<rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3"  x2="8"  y2="7"/><line x1="16" y1="3" x2="16" y2="7"/>',
      'clock'       => '<circle cx="12" cy="12" r="9"/><polyline points="12 7 12 12 16 14"/>',
      'award'       => '<circle cx="12" cy="9" r="6"/><polyline points="8.5 13 7 22 12 19 17 22 15.5 13"/>',
      'lock'        => '<rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/>',
      'file-text'   => '<path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="14 3 14 9 20 9"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="14" y2="17"/>',
      'eye'         => '<path d="M2 12s4-8 10-8 10 8 10 8-4 8-10 8S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>',
      'globe'       => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c3 3.5 3 14 0 18-3-4-3-14.5 0-18z"/>',
      'quote'       => '<path d="M9 7H5a2 2 0 0 0-2 2v5h6V9H6c0-1 0-2 3-4z"/><path d="M20 7h-4a2 2 0 0 0-2 2v5h6V9h-3c0-1 0-2 3-4z"/>',
      'sun'         => '<circle cx="12" cy="12" r="4"/><line x1="12" y1="2" x2="12" y2="5"/><line x1="12" y1="19" x2="12" y2="22"/><line x1="2" y1="12" x2="5" y2="12"/><line x1="19" y1="12" x2="22" y2="12"/><line x1="5" y1="5" x2="7" y2="7"/><line x1="17" y1="17" x2="19" y2="19"/><line x1="5" y1="19" x2="7" y2="17"/><line x1="17" y1="7" x2="19" y2="5"/>',
      'heart'       => '<path d="M12 21s-8-5.3-8-12a5 5 0 0 1 9-3 5 5 0 0 1 9 3c0 6.7-8 12-8 12z"/>',
      'refresh'     => '<polyline points="21 12 21 5 14 5"/><path d="M20 12A8 8 0 0 1 4 12a8 8 0 0 1 14-5"/>',
      'life-buoy'   => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/><line x1="4.9" y1="4.9" x2="9.2" y2="9.2"/><line x1="14.8" y1="14.8" x2="19.1" y2="19.1"/><line x1="14.8" y1="9.2" x2="19.1" y2="4.9"/><line x1="4.9" y1="19.1" x2="9.2" y2="14.8"/>',
      'trophy'      => '<path d="M8 21h8"/><path d="M12 17v4"/><path d="M17 4h3a1 1 0 0 1 1 1v2a4 4 0 0 1-4 4"/><path d="M7 4H4a1 1 0 0 0-1 1v2a4 4 0 0 0 4 4"/><path d="M17 4H7v7a5 5 0 0 0 10 0z"/>',
      'chat'        => '<path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.5A8 8 0 1 1 21 12z"/>',
      'menu'        => '<line x1="4" y1="7"  x2="20" y2="7"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="17" x2="20" y2="17"/>',
      'x'           => '<line x1="6" y1="6" x2="18" y2="18"/><line x1="18" y1="6" x2="6" y2="18"/>',
      'plus'        => '<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>',
      'whatsapp'    => '<path d="M16 3C9 3 3.5 8.5 3.5 15.4c0 2.5.7 4.9 2 7L3 29l6.9-2.4c2 .9 4 1.3 6.2 1.3h.1c7 0 12.5-5.5 12.5-12.4C28.7 8.5 23 3 16 3zm0 22.6c-1.9 0-3.7-.5-5.3-1.4l-.4-.2-4.1 1.4 1.4-4-.3-.4c-1-1.6-1.5-3.5-1.5-5.4 0-5.6 4.6-10.1 10.2-10.1s10.2 4.5 10.2 10.1c0 5.6-4.6 10-10.2 10zm5.8-7.5c-.3-.2-1.8-.9-2.1-1s-.5-.2-.7.2c-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.2-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.7.1-.1.3-.4.5-.6.2-.2.2-.3.3-.5.1-.2.1-.4 0-.6-.1-.2-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5H12c-.2 0-.5.1-.7.4-.2.3-.9.9-.9 2.2 0 1.3.9 2.5 1 2.7.1.2 1.9 3 4.7 4.2.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.5-.1 1.8-.7 2-1.5.2-.7.2-1.4.2-1.5-.1-.1-.3-.2-.6-.4z"/>',
    ];
    $svg = $paths[$name] ?? '<circle cx="12" cy="12" r="9"/>';
    $viewBox = ($name === 'whatsapp') ? '0 0 32 32' : '0 0 24 24';
    $cls = trim($extra_class);
    return '<svg xmlns="http://www.w3.org/2000/svg" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="' . $viewBox . '"' . ($cls ? ' class="' . htmlspecialchars($cls, ENT_QUOTES) . '"' : '') . ' aria-hidden="true">' . $svg . '</svg>';
  }
}

/**
 * Icon-badge helper (icon inside a coloured chip).
 *   echo icon_badge('shield');                 // default deep-teal
 *   echo icon_badge('star',   'gold');
 *   echo icon_badge('users',  'navy',   'lg'); // 60×60
 */
if (!function_exists('icon_badge')) {
  function icon_badge($name, $variant = '', $size = '') {
    $cls = 'icon-badge';
    if ($variant) $cls .= ' icon-badge--' . htmlspecialchars($variant, ENT_QUOTES);
    if ($size)    $cls .= ' icon-badge--' . htmlspecialchars($size, ENT_QUOTES);
    return '<span class="' . $cls . '" aria-hidden="true">' . icon($name) . '</span>';
  }
}

/** Small inline icon (used in headings / list bullets). */
if (!function_exists('icon_inline')) {
  function icon_inline($name) {
    return '<span class="icon-inline" aria-hidden="true">' . icon($name, '', 18) . '</span>';
  }
}
