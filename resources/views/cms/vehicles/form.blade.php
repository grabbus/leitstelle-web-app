<div>
        <div class="mb-3">
            <label for="input_call_sign" class="form-label">
                Funkrufname
            </label>
            <input type="text"
                   class="form-control"
                   id="input_call_sign1"
                   aria-describedby="help_call_sign"
                   name="call_sign">
            <div id="help_call_sign" class="form-text">Vollständigen Funkrufnamen angeben.</div>
        </div>
    <div class="mb-3">
        <label for="input_type" class="form-label">
            Fahrzeugtyp (Abkürzung)
        </label>
        <input type="text"
               class="form-control"
               id="input_type1"
               aria-describedby="help_type"
               name="type"
        >
        <div id="help_type" class="form-text">Abgekürzten Fahrzeugtyp des Fahrzeugs angeben. Bspw.: HLF 20</div>
    </div>
        <div class="mb-3">
            <label for="input_type_long" class="form-label">
                Fahrzeugtyp (Vollständig)
            </label>
            <input type="text"
                   class="form-control"
                   id="input_type_long1"
                   aria-describedby="help_type_long"
                   name="type_long"
            >
            <div id="help_type_long" class="form-text">Ausgeschriebenen Fahrzeugtyp des Fahrzeugs angeben. Bspw.: Hilfeleistungslöschfahrzeug 20</div>
        </div>
        <div class="mb-3">
            <label for="input_equipment_manpower" class="form-label">
                Besatzung
            </label>
            <input type="number"
                   min="0"
                   max="9"
                   value="0"
                   class="form-control"
                   id="input_equipment_manpower1"
                   aria-describedby="help_equipment_manpower"
                   name="equipment_manpower"
            >
            <div id="help_equipment_manpower" class="form-text">Mannschaftsstärke der Besatzung Fahrzeugs in ganzen Zahlen angeben.</div>
        </div>
        <div class="mb-3">
            <label for="input_equipment_water" class="form-label @error('title') is-invalid @enderror">
                Tankinhalt (Liter)
            </label>
            <input type="number"
                   min="0"
                   max="12000"
                   step="100"
                   value="0"
                   class="form-control"
                   id="input_equipment_water1"
                   aria-describedby="help_equipment_water"
                   name="equipment_water"
            >
            @error('number')
                <div class="validation-error">
                    Please select a valid state.
                </div>
            @enderror
            <div id="help_equipment_water" class="form-text">Tankinhalt des Fahrzeugs in Litern angeben</div>

        </div>
        <div class="mb-3">
            <label for="input_equipment_scba" class="form-label">
                Anzahl Pressluftatmer
            </label>
            <input type="number"
                   min="0"
                   max="20"
                   value="0"
                   class="form-control"
                   id="input_equipment_scba1"
                   aria-describedby="help_equipment_scba"
                   name="equipment_scba"
            >
            <div id="help_equipment_scba" class="form-text">Anzahl der auf dem Fahrzeug verlasteten Pressluftatmer angeben.</div>
        </div>
</div>
