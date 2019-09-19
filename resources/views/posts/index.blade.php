@extends('layouts.app', ['activePage' => Request()->network_id , 'titlePage' => __('Posts')])

@section('content')
  <div class="content">
    <h2>CervezaAguila</h2>
    <div class="container-fluid">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Options:</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a  class="nav-link active" 
                                        href="{{route('posts.indexNetwork',['network_id' => Request()->network_id, 'account' => 'CervezaAguila'] )}}">
                                        <i class="material-icons">bug_report</i> Posts
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{route('comments.indexNetwork',['network_id' => Request()->network_id, 'account' => 'CervezaAguila'] )}}">
                                        <i class="material-icons">code</i> Comments
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{route('follower.indexNetwork',['network_id' => Request()->network_id, 'account' => 'CervezaAguila'] )}}">
                                        <i class="material-icons">code</i> Followers
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{route('reactions.indexNetwork',['network_id' => Request()->network_id, 'account' => 'CervezaAguila'] )}}">
                                        <i class="material-icons">cloud</i> Reactions
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" 
                                        href="{{route('follower.ranking',['network_id' => Request()->network_id, 'account' => 'CervezaAguila'] )}}">
                                        <i class="material-icons">cloud</i> Ranking
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="ranking">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="posts">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="comments">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="followers">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="reactions">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <h2>FCF</h2>
    <div class="container-fluid">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Options:</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a  class="nav-link active" 
                                        href="{{route('posts.indexNetwork',['network_id' => Request()->network_id, 'account' => 'FCF'] )}}">
                                        <i class="material-icons">bug_report</i> Posts
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{route('comments.indexNetwork',['network_id' => Request()->network_id, 'account' => 'FCF'] )}}">
                                        <i class="material-icons">code</i> Comments
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{route('follower.indexNetwork',['network_id' => Request()->network_id, 'account' => 'FCF'] )}}">
                                        <i class="material-icons">code</i> Followers
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{route('reactions.indexNetwork',['network_id' => Request()->network_id, 'account' => 'FCF'] )}}">
                                        <i class="material-icons">cloud</i> Reactions
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" 
                                        href="{{route('follower.ranking',['network_id' => Request()->network_id, 'account' => 'FCF'] )}}">
                                        <i class="material-icons">cloud</i> Ranking
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="ranking">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="posts">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="comments">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="followers">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="tab-pane" id="reactions">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                                </label>
                            </div>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                            </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Facebook Posts
                    <br>
                    Total: {{$count}}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table"> 
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>Network</th>
                            <th>Link</th>
                            <th>Message</th>
                            <th>Shares</th>
                            <th>Likes</th>
                            <th>Comments</th>
                            <th>Shares</th>
                            <th>Comments</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ( $posts as $key => $post )
                            <tr>
                                <td>  {{$post->id}} </td> 
                                <td>  {{$post->network_id}} </td>
                                <td>  <a href="{{$post->link}}"> ver </a> </td>
                                <td>  {{$post->message}} </td>
                                <td>  {{$post->shares}} </td>
                                <td>  {{$post->likes}} </td>
                                <td>  {{$post->comments}} </td>
                                <td>  {{$post->get_shares}} </td>
                                <td>  {{$post->get_parse}} </td>
                                <td> <button type="button" class="btn btn-info">Details</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> 
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
