<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Мои задачи</title>

    <!-- Fonts -->
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">

            <div id="vue-table-tasks">

                <div class="col-md-2">
                    <h3>Мои задачи</h3>
                </div>

                <div class="col-md-2" style="margin-top: 20px;">
                    <button class="btn btn-default" id="filter" name="filter" data-toggle="modal" data-target="#myModal">Фильтр</button>
                </div>

                <div class="col-md-2" style="margin-top: 20px;">
                    <div id="clear-filter" style="display: none;">
                        <button class="btn btn-default" id="filter" name="filter" @click.prevent="clearFilter">Сбросить Фильтр</button>
                    </div>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Задачи</th>
                    </tr>
                    </thead>
                    <tr v-for="item in items">
                        <td>@{{ item.note }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <!-- Модальное окно -->
    <div id="vue-modal-filter">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Фильтр</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="roles_id">Роль</label>
                            <select id="roles_id" class="form-control">
                                <option value="empty">Не указано</option>
                                <option v-for="item in itemsRoles" :value="item.id">@{{ item.name }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="performer_id">Ответственный</label>
                            <select id="performer_id" class="form-control">
                                <option value="empty">Не указано</option>
                                <option v-for="item in itemsPerformers" :value="item.id">@{{ item.fio }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="director_id">Постановщик</label>
                            <select id="director_id" class="form-control">
                                <option value="empty">Не указано</option>
                                <option v-for="item in itemsDirectors" :value="item.id">@{{ item.fio }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Название</label>
                            <input type="text" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="status_id">Статус</label>
                            <select id="status_id" class="form-control">
                                <option value="empty">Не указано</option>
                                <option v-for="item in itemsStatus" :value="item.id">@{{ item.name }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="deadline">Крайний срок</label>
                            <input type="date" id="deadline" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" @click.prevent="searchFilter">
                            <span class="glyphicon glyphicon-search"></span>
                            Найти
                        </button>
                        <button type="button" class="btn btn-default" @click.prevent="clearFilter">Сбросить</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>