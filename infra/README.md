Running Minikube with one master and two nodes on Windows 10 involves a few steps. Minikube simplifies the setup of a local Kubernetes cluster for development and testing purposes. Here's a general guide on how you can set up Minikube with one master and two nodes on Windows 10:

Prerequisites:
Install Minikube.
using PowerShell, use this command:

New-Item -Path 'c:\' -Name 'minikube' -ItemType Directory -Force
Invoke-WebRequest -OutFile 'c:\minikube\minikube.exe' -Uri 'https://github.com/kubernetes/minikube/releases/latest/download/minikube-windows-amd64.exe' -UseBasicParsing



add minikube to windows path









Install kubectl.

Ensure you have a hypervisor installed. Minikube supports Hyper-V, VirtualBox, and others. You can choose one based on your preference.


Start Minikube:

Open a command prompt or PowerShell and run the following command to start Minikube:

minikube start --nodes 3 --cni=flannel


This command starts Minikube with three nodes using the Flannel CNI (Container Network Interface) plugin. Adjust the --nodes flag if you want a different number of nodes.



Check Cluster Status:

After Minikube has started, check the status of your cluster:


kubectl get nodes



You should see three nodes in the output, including one master and two worker nodes.


Deploy Workloads:

You can now deploy your Kubernetes workloads to the cluster. For example, create a simple deployment:


kubectl create deployment nginx --image=nginx



