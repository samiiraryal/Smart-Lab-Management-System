import { useQuery } from "node_modules/@tanstack/react-query/build/legacy/useQuery.js"
import httpClient from "./apiService.js";

const getAllStudent = () => {
    const studentEndpoint = '/api/student';
  
    return useQuery({
      queryKey: ['getAllStudent'],
      queryFn: async () => {
        return await httpClient.get(studentEndpoint)
      },
      select: (data) => data.data.result,
    });
  }
  export default getAllStudent
