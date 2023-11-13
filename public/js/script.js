// Ouve o evento de mudança no switch
$('#switchAdm').change(function() {
    // Verifica se o switch está marcado
    if ($(this).prop('checked')) {
        // Se estiver marcado, esconde o div #composerListar e mostra o div #composerListarAdm
        $('#composerListar').hide();
        $('#composerListarAdm').show();
        $('#btnNovoFilme').show();
        $('#btnNovoAdm').show();
        $('#btnSair').show();
        $('#bntEntrar').hide();
    } else {
        // Se não estiver marcado, mostra o div #composerListar e esconde o div #composerListarAdm
        $('#composerListar').show();
        $('#composerListarAdm').hide();
        $('#btnNovoFilme').hide();
        $('#btnNovoAdm').hide();
        $('#btnSair').hide();
        $('#bntEntrar').show();
    }
});