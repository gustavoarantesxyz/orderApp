<main>
    <article>
        <div class="container mt-3 mb-3">
            <div class="px-3">
                <h4 class="mb-4 text-center">Editar Encomenda</h4>
                <div class="card rounded-5 shadow col-md-8 mx-auto">
                    <div class="card-body text-center">

                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bag-dash" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M5.5 10a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5" />
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                            </svg>
                        </div>

                        <form id="orderForm" action="index.php?class=OrderFormUpdate&method=save" method="POST">
                            <input type="hidden" name="order_id" value="{order_id}"></input>

                            <div class="mb-4">
                                <label for="order_title" class="form-label"><strong>ENCOMENDA</strong></label>
                                <input type="text" name="order_title" class="form-control text-black border border-dark-subtle rounded-4 p-3" placeholder="Festa na Caixa" value="{order_title}"></input>
                            </div>

                            <div class="mb-4">
                                <label for="client_name" class="form-label"><strong>CLIENTE</strong></label>
                                <input type="text" name="client_name" class="form-control text-black border-dark-subtle rounded-4 p-3" placeholder="Lívia Couto" value="{client_name}"></input>
                            </div>

                            <div class="mb-4">
                                <label for="completion_date" class="form-label"><strong>ENTREGA</strong></label>
                                <input type="text" name="completion_date" id="completion_date" class="completion_date form-control text-black border-dark-subtle rounded-4 p-3" placeholder="01/06/2024" value="{completion_date}"></input>
                            </div>

                            <div class="mb-4">
                                <label for="completion_time" class="form-label"><strong>HORARIO</strong></label>
                                <input type="text" name="completion_time" id="completion_time" class="completion_time form-control text-black border-dark-subtle rounded-4 p-3" placeholder="20:30" value="{completion_time}"></input>
                            </div>

                            <div class="mb-4">
                                <label for="order_price" class="form-label"><strong>PREÇO</strong></label>
                                <input type="text" name="order_price" class="order_price form-control text-black border-dark-subtle rounded-4 p-3" placeholder="250,00" value="{order_price}"></input>
                            </div>

                            <div class="mb-4">
                                <label for="payment_method" class="form-label"><strong>PAGAMENTO</strong></label>
                                <select name="payment_method" id="payment_method" class="form-select border-dark-subtle rounded-4 p-3" required>
                                    <option hidden>Selecione...</option>
                                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                                    <option value="Cartão de Débito">Cartão de Débito</option>
                                    <option value="Dinheiro">Dinheiro</option>
                                    <option value="Pix">Pix</option>
                                </select>
                            </div>

                            <div class="mb-4 hidden" id="payment_installments_div">
                                <label for="payment_installments" class="form-label"><strong>PARCELAS</strong></label>
                                <select name="payment_installments" id="payment_installments" class="form-select border-dark-subtle rounded-4 p-3" required>
                                    <option hidden>Selecione...</option>
                                    <option value="1">1x</option>
                                    <option value="2">2x</option>
                                    <option value="3">3x</option>
                                    <option value="4">4x</option>
                                    <option value="5">5x</option>
                                    <option value="6">6x</option>
                                    <option value="7">7x</option>
                                    <option value="8">8x</option>
                                    <option value="9">9x</option>
                                    <option value="10">10x</option>
                                    <option value="11">11x</option>
                                    <option value="12">12x</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="order_description" class="form-label"><strong>OBSERVAÇÃO</strong></label>
                                <textarea type="text" name="order_description" rows="3" class="form-control  border-dark-subtle rounded-4 p-3" placeholder="Levar maquininha.">{order_description}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="is_completed" class="form-label"><strong>STATUS</strong></label>

                                <div class="form-control border-dark-subtle rounded-4 p-3">
                                    <span class="m-3">Finalizada?</span>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_completed" value="t">
                                        <label class="form-check-label" for="is_completed">Sim</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_completed" value="f">
                                        <label class="form-check-label" for="is_completed">Não</label>
                                    </div>
                                </div>
                            </div>

                            <button id="deleteButton" class="btn bg-danger-subtle text-danger-emphasis p-3 lh-1 rounded-5" type="button" style="width: 60px; height: 60px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                </svg>
                            </button>
                            <span class="mx-2"></span>
                            <button id="backButton" class="btn bg-body-secondary p-3 lh-1 rounded-5" type="button" style="width: 60px; height: 60px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-center text-secondary pt-3">
                    <p>Código {order_id} - Cadastrada em {created_at}</p>
                </div>
            </div>
        </div>

        <div class="position-fixed bottom-0 end-0 m-5">
            <button id="submitButton" class="btn text-warning-emphasis bg-warning-subtle rounded-5 p-3 lh-1 shadow" type="button" style="width: 60px; height: 60px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                </svg>
            </button>
        </div>
    </article>
</main>

<script>
    // Mask for date, time and money
    $(document).ready(function() {
        $('.completion_date').mask('00/00/0000')
        $('.completion_time').mask('00:00');
        $('.order_price').mask('0.000,00', {
            reverse: true
        });
    });

    $(document).ready(function() {
        function showErrorMessage(field, message) {
            field.next('.error-message').remove(); // Remove existing error message
            field.after('<p class="error-message mt-2 text-danger"><strong>' + message + '</strong></p>');
        }

        function clearErrorMessages() {
            $('.error-message').remove();
        }

        function validateForm() {
            clearErrorMessages(); // Clear all previous error messages

            const form = $('#orderForm')[0];
            const paymentMethod = $('#payment_method');
            const payment_installments = $('#payment_installments');

            let isValid = true;

            if (!form.checkValidity()) {
                form.reportValidity(); // Highlight invalid fields using HTML5 validation
                isValid = false;
            }

            if (paymentMethod.val() === 'Selecione...') {
                showErrorMessage(paymentMethod, 'Por favor, selecione um método de pagamento.');
                isValid = false;
            }

            if (paymentMethod.val() === 'Cartão de Crédito' && payment_installments.val() === 'Selecione...') {
                showErrorMessage(payment_installments, 'Por favor, selecione uma opção de parcelas.');
                isValid = false;
            }

            if (isValid) {
                if (confirm('Alteração realizada com sucesso!')) {
                    form.submit();
                }
            }
        }

        // Function to toggle installments visibility based on payment method
        function toggleInstallments() {
            const paymentMethodSelect = $('#payment_method');
            const installmentsDiv = $('#payment_installments_div');
            if (paymentMethodSelect.val() === 'Cartão de Crédito') {
                installmentsDiv.removeClass('hidden');
            } else {
                installmentsDiv.addClass('hidden');
            }
        }

        // Call the function on page load
        toggleInstallments();

        // Event handler for payment method change
        $('#payment_method').on('change', function() {
            toggleInstallments();
            // Remove error message when payment method is changed
            $(this).next('.error-message').remove();
        });

        // Event handler for credit installments change
        $('#payment_installments').on('change', function() {
            // Remove error message when credit installments are changed
            $(this).next('.error-message').remove();
        });

        // Event handler for form submission
        $('#submitButton').on('click', function(event) {
            event.preventDefault(); // Prevent default form submission
            validateForm();
        });

        // Event handler for back button
        $('#backButton').on('click', function() {
            window.location = 'index.php';
        });

        // Event handler for delete button
        $('#deleteButton').on('click', function() {
            if (confirm("Tem certeza de que deseja deletar?")) {
                window.location.href = "index.php?class=OrderFormUpdate&method=delete&id={order_id}";
            }
        });

        // Event handler for removing error messages on input or change
        $('#orderForm input, #orderForm select').on('input change', function() {
            $(this).next('.error-message').remove();
        });

        // Event handler for date field validation
        $('#completion_date').on('blur', function() {
            const dateField = $(this);
            const dateValue = dateField.val();
            const datePattern = /^(0[1-9]|[12]\d|3[01])\/(0[1-9]|1[0-2])\/(19|20)\d\d$/;

            dateField.next('.error-message').remove(); // Clear previous error message

            if (!datePattern.test(dateValue)) {
                showErrorMessage(dateField, "Por favor, insira uma data válida.");
                dateField.val(''); // Clear the invalid value
            }
        });

        // Event handler for time field validation
        $('#completion_time').on('blur', function() {
            const timeField = $(this);
            const timeValue = timeField.val();
            const timePattern = /^([01]\d|2[0-3]):([0-5]\d)$/;

            timeField.next('.error-message').remove(); // Clear previous error message

            if (!timePattern.test(timeValue)) {
                showErrorMessage(timeField, "Por favor, insira um horário válido.");
                timeField.val(''); // Clear the invalid value
            }
        });
    });
</script>