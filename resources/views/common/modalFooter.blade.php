  <!-- data-dismiss lo que nos va a permitir es que cuando hagamos un click en el cierre la modal que estamos mostrando en ese momento para el usuario -->

  </div>
        <div class="modal-footer">

            <button type="button" wire:click.prevent="resetUI()" class="btn btn-dark close-btn text-info" data-dismiss="modal" >
                CERRAR
            </button>
      
            @if($selected_id < 1 ) 
            <button type="button" wire:click.prevent="Store()" class="btn btn-dark close-modal">
                    GUARDAR</button>
            @else
            <button type="button" wire:click.prevent="Update()" class="btn btn-dark close-modal">
                    ACTUALIZAR</button>
            @endif

        </div>

      </div>

    </div>

  </div>
</div>