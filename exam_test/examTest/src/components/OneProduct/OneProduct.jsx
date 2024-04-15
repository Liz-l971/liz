import { useParams } from "react-router-dom";

function OneProduct({objects}) {

  const {id} = useParams();
  const object = objects.find(item=>item.id===parseInt(id))
  console.log(object)
  console.log(objects)

  return (
    <>
      <ul>
        <li>{object.title}</li>
        <li>{object.description}</li>
      </ul>
    </>
  );
}

export default OneProduct;
