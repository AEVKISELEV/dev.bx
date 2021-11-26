export class Item
{
	title;
	deleteButtonHandler;
	editButtonHandler;
	saveButtonHandler;
	clickEdit = false;
	nameClassInput = 'input-edit';

	constructor({title, deleteButtonHandler, editButtonHandler, saveButtonHandler})
	{
		this.title = String(title);
		if (typeof deleteButtonHandler === 'function')
		{
			this.deleteButtonHandler = deleteButtonHandler;
		}
		if (typeof editButtonHandler === 'function')
		{
			this.editButtonHandler = editButtonHandler;
		}
		if (typeof saveButtonHandler === 'function')
		{
			this.saveButtonHandler = saveButtonHandler;
		}
	}

	getData()
	{
		return {title: this.title};
	}

	render()
	{
		let title;
		const container = document.createElement('div');
		container.classList.add('item-container');

		if(this.clickEdit)
		{
			title = document.createElement('input');
			title.classList.add(Item.nameClassInput);
			title.value = this.title;
		}
		else
		{
			title = document.createElement('div');
			title.classList.add('item-title');
			title.innerText = this.title;
		}


		container.append(title);
		const buttonsContainer = document.createElement('div');
		const deleteButton = document.createElement('button');
		deleteButton.innerText = 'Delete';
		const editButton = document.createElement('button');
		editButton.innerText = 'Edit';
		const saveButton = document.createElement('button');
		saveButton.innerText = 'Save';


		if (this.clickEdit)
		{
			buttonsContainer.append(saveButton);
			saveButton.addEventListener('click', this.handleSaveButtonClick.bind(this));
		}
		else
		{
			buttonsContainer.append(editButton);
			editButton.addEventListener('click', this.handleEditButtonClick.bind(this));
		}

		deleteButton.addEventListener('click', this.handleDeleteButtonClick.bind(this));
		buttonsContainer.append(deleteButton);

		container.append(buttonsContainer);

		return container;
	}

	handleDeleteButtonClick()
	{
		if (this.deleteButtonHandler)
		{
			this.deleteButtonHandler(this);
		}
	}
	handleEditButtonClick()
	{
		if (this.editButtonHandler)
		{
			this.editButtonHandler(this);
		}
	}
	handleSaveButtonClick()
	{
		if (this.saveButtonHandler)
		{
			this.saveButtonHandler(this);
		}
	}

}