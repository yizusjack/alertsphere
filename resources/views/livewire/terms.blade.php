<div>
    <div class="row">
        <div class="col-12">
          <button class='btn btn-outline-warning' wire:click="$set('display', true)">Términos y condiciones</button>
        </div>
      </div> 

      <x-dialog-modal wire:model='display'>
        <x-slot name='title'>
            <br> <br>
          <div class="row text-center">
            <h1>Términos y condiciones</h1>
          </div>
        </x-slot>
        <x-slot name='content'>
            <div class='row'>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at fermentum lorem, nec mollis sem. Vivamus auctor, dui non accumsan auctor, ipsum dolor blandit nibh, quis tristique ipsum mi vel ipsum. Curabitur aliquam sapien et dui suscipit, nec dignissim est auctor. Nam condimentum maximus faucibus. Donec est tortor, elementum eu orci ac, dapibus sagittis lectus. Etiam vestibulum hendrerit feugiat. Morbi sollicitudin erat sed sapien suscipit consequat. Aenean odio libero, rutrum sed interdum ac, aliquam in sem. In hac habitasse platea dictumst. Donec feugiat, odio at faucibus facilisis, arcu urna feugiat felis, non tristique nisl dolor at nisl. Donec in iaculis diam. Etiam aliquet euismod diam eu ullamcorper. Donec vitae leo ullamcorper, ultricies risus vel, tempus risus. Praesent id feugiat nunc, at aliquet mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus mi ut purus tempus congue.
            </div> <br>
            <div class='row'>
                Suspendisse tempor a dolor bibendum placerat. Quisque nec arcu finibus, finibus elit sed, tincidunt leo. Vestibulum a felis lectus. Vivamus lacus diam, elementum vel ligula vitae, laoreet consectetur dui. Nunc ac erat et metus porta vehicula. Integer ut ipsum auctor, finibus felis sit amet, dapibus enim. Fusce faucibus rhoncus lacus, et vehicula libero pharetra ac. Morbi posuere massa justo, sed fringilla augue laoreet et. Sed ultrices lacinia nulla eu faucibus. Donec ante urna, convallis vel augue quis, sollicitudin luctus metus. Vestibulum in porttitor velit. Proin fermentum sit amet nibh quis congue. Fusce aliquam, neque et venenatis rutrum, enim nulla mollis odio, at tempus augue diam et diam.
            </div>        <br> 
          
        </x-slot>
        <x-slot name='footer'>
          <button wire:click="$set('display', false)" class="btn btn-secondary">Cerrar</button>
        </x-slot>
      </x-dialog-modal>
</div>
