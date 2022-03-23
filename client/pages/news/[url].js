import { useRouter } from 'next/router';
import React from 'react'
import { appAxios } from '../../utils/appAxios.js'



export default function NewsDetay({data}) {
    const router = useRouter()
    console.log(data);
  return (
   <> 
   <p className='text-center m-10'>News Detay</p>
   <p className='text-center'>description : {data.newsdesc}</p>
   <button className='text-white bg-blue-300 flex-auto' onClick={() => router.push("/")}> Back Home </button>

   </>
  )
}

export async function getServerSideProps({params,context}){

    const {data} = await appAxios.get(`/api/news/${params.url}`)
    const res = await data
    if(!res){
        return {
            notFound: true,
        }
    }
        return {
            props: {
                data
            }
        }
    
    
}