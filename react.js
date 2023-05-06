const rd = ReactDOM;

class TodoApp extends React.Component{

    constructor(props){
        super(props);
        this.state= {items : [], text: ''};
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit  = this.handleSubmit.bind(this);
    }

    render(){
        return(
            <div>
                <h3>Todo</h3>
                <TodoList items={this.state.items} />
                <form onSubmit={this.handleSubmit}>
                        <label>What needs to be done?</label>
                        <input id="todo" onChange={this.handleChange} value = {this.state.text}/>

                        <button type="button" class="btn btn-primary ">Add #{this.state.items.length + 1} </button>
                </form>
            </div>
        );
    }

    handleChange(e){
        this.setState({text: e.target.value});
    }

    handleSubmit(e){
        e.preventDefault();
        if(this.state.text.length === 0){
            return;
        }
        var newItem = {
            text:this.state.text,
            id: Date.now()
        };
            this.setState(state =>({
                items: state.items.concat(newItem),
                text: ''
            }));
    }

}

class TodoList extends React.Component{
    render(){
        return (
            <ul>
                {this.props.items.map(item =>(
                    <li key={item.id}>{item.text}</li>
                ))}
            </ul>
        );
    }
}

rd.render(<TodoApp/>, document.getElementById("todo"));




rd.render(
<div>
    <h2>This is header is from react.js</h2>
    <p> This is paragraph from react.js</p>
</div>



,
document.getElementById("sample")
);

function UnorderedList(){
    return (
        <div class=""> 
            <h1>Special Lists</h1>
        <ul>
            <li>list 1</li>
            <li>list 2</li>
            <li>list 3</li>
            <li>list 4</li>
            <li>list 5</li>
        </ul>
        </div>
    );

}

rd.render(<UnorderedList/>, document.getElementById("root"));


const table = (
   <div class=""> 
   <h1>Table</h1>
    
    <table class ="table table-hover table-lg table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>21</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Dogie</td>
                <td>21</td>
            </tr>

        </tbody>
    </table>
    </div>

);

rd.render(table, document.getElementById("table"));


class Five extends React.Component{
    render(){
        return(
            <h1>The sum of 5 & 5 is {5 + 5}</h1>
        );
    }


}
rd.render(<Five/>, document.getElementById("five"));

function Car(props){
    return<h2>My car is {props.brand} {props.models}</h2>
}
rd.render(<Car brand="Toyota" models="Ae86"/>, document.getElementById("car"));


function Grade(props){
    var average = ((props.pre *.30) + (props.mid *.30) + (props.fin *.40));
    var remarks="";
    if(average>=75){
        remarks= "Passed";
    }else{
        remarks= "Failed";
    }
    return (
    <div class="col-15">
    <h1>Semestral Grade</h1>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Prelim</th>
                    <th>Midterm</th>
                    <th>Finals</th>
                    <th>Grade</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{props.pre}</td>
                    <td>{props.mid}</td>
                    <td>{props.fin}</td>
                    <td>{average}</td>
                    <td>{remarks}</td>
                </tr>
            </tbody>
        </table>
    </div>
    );
}

rd.render(<Grade pre ="86" mid="97" fin="75"/>, document.getElementById("grade"));
