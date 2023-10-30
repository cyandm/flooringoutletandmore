<?php $active = isset($args['active']) ? $args['active'] : false; ?>

<svg width="16" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M7.04894 0.92705C7.3483 0.00573921 8.6517 0.00573969 8.95106 0.92705L10.0206 4.21885C10.1545 4.63087 10.5385 4.90983 10.9717 4.90983H14.4329C15.4016 4.90983 15.8044 6.14945 15.0207 6.71885L12.2205 8.75329C11.87 9.00793 11.7234 9.4593 11.8572 9.87132L12.9268 13.1631C13.2261 14.0844 12.1717 14.8506 11.388 14.2812L8.58778 12.2467C8.2373 11.9921 7.7627 11.9921 7.41221 12.2467L4.61204 14.2812C3.82833 14.8506 2.77385 14.0844 3.0732 13.1631L4.14277 9.87132C4.27665 9.4593 4.12999 9.00793 3.7795 8.75329L0.979333 6.71885C0.195619 6.14945 0.598395 4.90983 1.56712 4.90983H5.02832C5.46154 4.90983 5.8455 4.63087 5.97937 4.21885L7.04894 0.92705Z" 
    fill="url(#paint_linear_<?php echo $active ? 'active' : 'deactivate' ?>)" />
  <defs>
    <linearGradient id="paint_linear_active" x1="-2" y1="7.99792" x2="19.6084" y2="7.99792" gradientUnits="userSpaceOnUse0">
        <stop stop-color="#FFD43D" />
        <stop offset="1" stop-color="#FFA337" />
    </linearGradient>
    
    <linearGradient id="paint_linear_deactivate" x1="-2" y1="7.99792" x2="19.6084" y2="7.99792" gradientUnits="userSpaceOnUse1">
        <stop stop-color="#8d8d8d" />
        <stop offset="1" stop-color="#5b5b5b" />
    </linearGradient>
  </defs>
</svg>
